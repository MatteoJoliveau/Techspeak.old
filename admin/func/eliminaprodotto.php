<p>
<?php

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
$resrow = mysqli_fetch_assoc($result) or die('Errore durante il fetch.');

// Conto le righe
$numrows = mysqli_num_rows($result);

if ($numrows == 0)
	die("Oggetto non trovato.");
if ($numrows > 1)
	die("Errore: Selezionati oggetti multipli.");

// Scrivi le info aggiornate.
$query_update = "DELETE FROM configurazioni WHERE id = ". $resrow['id'];
mysqli_query($myconn, $query_update) or die('Errore durante l\'esecuzione della query di aggiornamento con id:'.$resrow['id']);
echo "<h3>Eliminato componente con ID:". $resrow['id'] ."</h3>";
	
// Chiudo la connessione
mysqli_close($myconn);
?>
</p>