<?php
require($_SERVER['DOCUMENT_ROOT']."/lib/amazonapibelle.php");

if (defined('STDIN')) {
  $fascia = $argv[1];
} else { 
  $fascia = $_GET['fascia'];
}

// AGGIORNO IL DATABASE DEI PREZZI

// Collegamento al database
$myconn = mysqli_connect('techspearmsql.mysql.db', 'techspearmsql', 'Mysqlpdata0') or die('Errore durante la connessione al server');

// Seleziono il database
mysqli_select_db($myconn, 'techspearmsql') or die('Errore durante la selezione del database');

// Imposto ed eseguo la query
$query = "SELECT * FROM configurazioni";
if (isset($fascia)) $query .= " WHERE fascia = 800";
$query .= " ORDER BY id ASC";

$result = mysqli_query($myconn, $query) or die('Errore durante l\'esecuzione della query di selezione');

// Conto le righe
$numrows = mysqli_num_rows($result);

// Se il database è vuoto muoio
if ($numrows == 0)
	die("Database vuoto");

for ($i = 0; $i < $numrows; $i++){
	$resrow = mysqli_fetch_assoc($result) or die('bella');
			
	do {
		$oggetto = getAmazonItem( $resrow['code'] ); // Fetch di informazioni da Amazon
		sleep(2);
	}
	while ($oggetto[2] == "err" || $oggetto[1] == "err"); // Controllo che Amazon stia restituendo cose corrette
	
	// Scrivi le info aggiornate.
	$query_update = "UPDATE configurazioni SET prezzo='". $oggetto[2] ."', nome='". $oggetto[1] ."' WHERE id = ". $resrow['id'];
	mysqli_query($myconn, $query_update) or die('Errore durante l\'esecuzione della query di aggiornamento con id:'.$resrow['id']);
	echo "<h3>Aggiornato componente con ID:". $resrow['id'] ."</h3>";
	
}

	
// Chiudo la connessione
mysqli_close($myconn);
?>