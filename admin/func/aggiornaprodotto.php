<p>
<?php
require($_SERVER['DOCUMENT_ROOT']."/lib/amazonapibelle.php");

$fascia = $_POST['fascia'];
$oldcode = $_POST['oldcode'];
$newcode = $_POST['newcode'];
if (!isset($_POST['fascia']) || !isset($_POST['oldcode']) || !isset($_POST['newcode']) || $fascia == NULL || $oldcode == NULL || $newcode == NULL)
	die('Parametri errati');
// AGGIORNO IL DATABASE DEI PREZZI

// Collegamento al database
$myconn = mysqli_connect('techspearmsql.mysql.db', 'techspearmsql', 'Mysqlpdata0') or die('Errore durante la connessione al server');

// Seleziono il database
mysqli_select_db($myconn, 'techspearmsql') or die('Errore durante la selezione del database');

// Imposto ed eseguo la query
$query = "SELECT * FROM configurazioni";
$query .= " WHERE fascia = ".$fascia." AND code = '".$oldcode."'";
$query .= " ORDER BY id ASC";

$result = mysqli_query($myconn, $query) or die('Errore durante l\'esecuzione della query di selezione');
$resrow = mysqli_fetch_assoc($result) or die('Errore durante il fetch.');

// Conto le righe
$numrows = mysqli_num_rows($result);

if ($numrows == 0)
	die("Oggetto non trovato.");
if ($numrows > 1)
	die("Errore: Selezionati oggetti multipli.");

do {
	$oggetto = getAmazonItem( $newcode ); // Fetch di informazioni da Amazon
	sleep(1);
}
while ($oggetto[2] == "err" || $oggetto[1] == "err"); // Controllo che Amazon stia restituendo cose corrette

// Scrivi le info aggiornate.
$query_update = "UPDATE configurazioni SET code='". $newcode ."', prezzo='". $oggetto[2] ."', nome='". $oggetto[1] ."' WHERE id = ". $resrow['id'];
mysqli_query($myconn, $query_update) or die('Errore durante l\'esecuzione della query di aggiornamento con id:'.$resrow['id']);
echo "<h3>Aggiornato componente con ID:". $resrow['id'] ."</h3>";
	
// Chiudo la connessione
mysqli_close($myconn);
?>
</p>