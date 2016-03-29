<?php
//*** Start Configuration Options ***
$amazonAWSAccessKeyId = "AKIAJDV57MMDSWNYXX6A";
$amazonSecretAccessKey = "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";
$amazonAssociateTag = "AKIAJDV57MMDSWNYXX6A";

//*** End Configuration Options ***

function amazonEncode($text)
{
    $encodedText = "";
    $j = strlen($text);
    for($i=0;$i<$j;$i++)
    {
        $c = substr($text,$i,1);
        if (!preg_match("/[A-Za-z0-9\-_.~]/",$c))
        {
            $encodedText .= sprintf("%%%02X",ord($c));
        }
        else
        {
            $encodedText .= $c;
        }
    }
    return $encodedText;
}

function amazonSign($url,$secretAccessKey)
{
    // 0. Append Timestamp parameter
    $url .= "&Timestamp=".gmdate("Y-m-d\TH:i:s\Z");

    // 1a. Sort the UTF-8 query string components by parameter name
    $urlParts = parse_url($url);
    parse_str($urlParts["query"],$queryVars);
    ksort($queryVars);

    // 1b. URL encode the parameter name and values
    $encodedVars = array();
    foreach($queryVars as $key => $value)
    {
        $encodedVars[amazonEncode($key)] = amazonEncode($value);
    }

    // 1c. 1d. Reconstruct encoded query
    $encodedQueryVars = array();
    foreach($encodedVars as $key => $value)
    {
        $encodedQueryVars[] = $key."=".$value;
    }
    $encodedQuery = implode("&",$encodedQueryVars);

    // 2. Create the string to sign
    $stringToSign  = "GET";
    $stringToSign .= "\n".strtolower($urlParts["host"]);
    $stringToSign .= "\n".$urlParts["path"];
    $stringToSign .= "\n".$encodedQuery;

    // 3. Calculate an RFC 2104-compliant HMAC with the string you just created,
    //    your Secret Access Key as the key, and SHA256 as the hash algorithm.
    if (function_exists("hash_hmac"))
    {
        $hmac = hash_hmac("sha256",$stringToSign,$secretAccessKey,TRUE);
    }
    elseif(function_exists("mhash"))
    {
        $hmac = mhash(MHASH_SHA256,$stringToSign,$secretAccessKey);
    }
    else
    {
        die("No hash function available!");
    }

    // 4. Convert the resulting value to base64
    $hmacBase64 = base64_encode($hmac);

    // 5. Use the resulting value as the value of the Signature request parameter
    // (URL encoded as per step 1b)
    $url .= "&Signature=".amazonEncode($hmacBase64);

    return $url;
}

function makeQuery($operation, $q_item, $amazonAWSAccessKeyId, $amazonSecretAccessKey){
	// start the table
    // construct Amazon Web Services REST Query URL
    $url  = "http://webservices.amazon.it/onca/xml?Service=AWSECommerceService";
    $url .= "&Version=2011-08-01";
    $url .= "&Operation=ItemLookup";
    $url .= "&AWSAccessKeyId=".$amazonAWSAccessKeyId;
    $url .= "&AssociateTag=kappa";
	
    if ($operation == "prezzo")
		$url .= "&ResponseGroup=OfferFull";
	else 
		$url .= "&ResponseGroup=ItemAttributes";
	
	$url .= "&IdType=ASIN";
    $url .= "&ItemId=" . $q_item;


    // sign
    $url = amazonSign($url,$amazonSecretAccessKey);
    // fetch the response and parse the results
    $curl_handle=curl_init();
    curl_setopt($curl_handle,CURLOPT_URL,$url);
    curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
    $data = curl_exec($curl_handle);
	
	return $data;
}

// START HERE

function getXML($q_item){
	if ($q_item == null) die("L'oggetto da cercare non puo' essere null.");
	
	$xml = makeQuery("prezzo", $q_item, $GLOBALS['amazonAWSAccessKeyId'], $GLOBALS['amazonSecretAccessKey']);
	return $xml;
}

function getShippingPrice($q_item){
	// get the HTML
	$html = file_get_contents("http://www.amazon.it/dp/" . $q_item);	

	//echo $html;
	preg_match(
		"/<span class=(.*)>(.*)EUR(.*)spedizione(.*)<\/span>/",
		$html,
		$price);
	
	return floatval(str_replace(",",".", trim($price[3])));
	
}

function getAmazonItem($q_item){
	$risultato[0] = $q_item;
	
	if ($q_item == null) die("L'oggetto da cercare non puo' essere null.");
	
	$info = simplexml_load_string(makeQuery("info", $q_item, $GLOBALS['amazonAWSAccessKeyId'], $GLOBALS['amazonSecretAccessKey']));
	$offerte = simplexml_load_string(makeQuery("prezzo", $q_item, $GLOBALS['amazonAWSAccessKeyId'], $GLOBALS['amazonSecretAccessKey']));

	$risultato[1] = $info->Items->Item->ItemAttributes->Title;
	$risultato[2] = ($offerte->Items->Item->Offers->Offer->OfferListing->Price->Amount)/100;
	
    if($offerte->Error->Code == "RequestThrottled")
		$risultato[1] = "err";
    
	else if ($risultato[1] == null)
		$risultato[1] = "N/D";
	
	if ($risultato[2] == 0)
		$risultato[2] = "N/D";
	
	$risultato[4] = "http://www.amazon.it/dp/" . $risultato[0];
	
	return $risultato;
	
}

/* DATABASE STUFF */


function generaTabella($myconn, $fas){
	
		$tmp = '<a class="ancora" name="'. $fas .'">&nbsp;</a><h3>Fascia '. $fas .'€</h3>
		  <div class="table">
			
			<div class="row header blue">
			  <div class="cell">
				Componente
			  </div>
			  <div class="cell" style="width:120px;">
				Link
			  </div>
			  <div class="cell">
				Prezzo
			  </div>
			</div>';

			// Eseguo la query
			$q = ricerca($myconn, $fas);
			$totale = 0;
			
			for ($i = 0; $i < $q['dim']; $i++){
				$resrow = mysqli_fetch_assoc($q['res']);
				$totale += $resrow['prezzo'];
				
				$tmp .= '<div class="row"><div class="cell">' . $resrow['nome'] . '</div>';
				$tmp .= '<div class="cell"><a href="http://www.amazon.it/dp/' . $resrow['code'] . '" target="_blank">Compralo &rarr;</a></div>';
				$tmp .= '<div class="cell">' . number_format($resrow['prezzo'], 2) . '€</div></div>';
			}	


		$tmp .= '
			<div class="row header blue">
			  <div class="cell">
			  </div>
			  <div class="cell">
				Totale:
			  </div>
			  <div class="cell">
				' . number_format($totale, 2) . '€
			  </div>
			</div>
			</div>
			<br /><br />';
		
		return $tmp;

}

function ricerca($myconn, $fas){
	// Imposto ed eseguo la query
	$query = "SELECT code,nome,prezzo FROM configurazioni WHERE fascia=". $fas ." ORDER BY id ASC";
	$result = mysqli_query($myconn, $query) or die('Errore durante l\'esecuzione della query di selezione');

	// Conto le righe
	$numrows = mysqli_num_rows($result);

	// Se il database è vuoto muoio
	if ($numrows == 0)
		die("Database vuoto");
	
	$tmp['dim'] = $numrows;
	$tmp['res'] = $result;
	
	return $tmp;
}
?>