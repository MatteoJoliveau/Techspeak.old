<p>
<?php
require($_SERVER['DOCUMENT_ROOT']."/lib/amazonapibelle.php");

$fascia = $_POST['fascia'];
$code = $_POST['code'];
if (!isset($_POST['fascia']) || !isset($_POST['code']) || $fascia == NULL || $code == NULL)
	die('Parametri errati');
// AGGIORNO IL DATABASE DEI PREZZI

// Collegamento al database
$myconn = mysqli_connect('techspearmsql.mysql.db', 'techspearmsql', 'Mysqlpdata0') or die('Errore durante la connessione al server');

// Seleziono il database
mysqli_select_db($myconn, 'techspearmsql') or die('Errore durante la selezione del database');

// Imposto ed eseguo la query
$query = "SELECT * FROM configurazioni";
$query .= " WHERE fascia = ".$fascia." AND code = '".$code."'";
$query .= " ORDER BY id ASC";

$result = mysqli_query($myconn, $query) or die('Errore durante l\'esecuzione della query di selezione');

// Conto le righe
$numrows = mysqli_num_rows($result);

if ($numrows != 0)
	die("Oggetto già inserito per questa fascia di prezzo.");

do {
	$oggetto = getAmazonItem( $code ); // Fetch di informazioni da Amazon
	sleep(1);
}
while ($oggetto[2] == "err" || $oggetto[1] == "err"); // Controllo che Amazon stia restituendo cose corrette

// Scrivi le info aggiornate.
$query_update = "INSERT INTO configurazioni (id, fascia, code, nome, prezzo) VALUES (NULL, '".$fascia."', '".$code."', '".$oggetto[1]."', '".$oggetto[2]."')";
mysqli_query($myconn, $query_update) or die('Errore durante l\'esecuzione della query di inserimento.');
echo "<h3>Componente inserito correttamente.</h3><br /><a href='techspeak.it/configurazioni#".$fascia."'>Controlla pure se non ti fidi, cliccami</a>";
	
// Chiudo la connessione
mysqli_close($myconn);
?>
</p>