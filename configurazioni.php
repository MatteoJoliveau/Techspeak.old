<?
require("lib/amazonapibelle.php");

$myconn = mysqli_connect('techspearmsql.mysql.db', 'techspearmsql', 'Mysqlpdata0') or die('Errore durante la connessione al server');

// Seleziono il database
mysqli_select_db($myconn, 'techspearmsql') or die('Errore durante la selezione del database');
?>
<!DOCTYPE html>

<html>
<head>
	<title>Configurazioni consigliate - TechSpeak</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='techspeak/style.css' rel='stylesheet' type='text/css'>
	
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#3498DB">
	
	<meta property="og:title" content="Configurazioni consigliate" />
	<meta property="og:site_name" content="TechSpeak.it"/>
	<meta property="og:description" content="Raccolta delle migliori configurazioni, con prezzi aggiornati automaticamente, scelte dal team di TechSpeak per ogni fascia di prezzo." />
	<meta property="og:image" content="http://www.techspeak.it/android-chrome-192x192.png" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="techspeak/jquery.scrollTo.min.js"></script>
	<script src="techspeak/script.js"></script>
	<style>
		#listafasce ul{
			text-align: center;
		}
		
		.navfasce{
			display: inline;
			margin-right: 20px;
		}
				#listafasce ul{
			text-align: center;
		}
		
		.navfasce{
			display: inline;
			margin-right: 20px;
		}

		
		.table {
		  margin: 0 0 40px 0;
		  width: 100%;
		  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
		  display: table;
		}
		@media screen and (max-width: 580px) {
		  .table {
			display: block;
		  }
		}

		.row {
		  display: table-row;
		  background: #f6f6f6;
		}
		.row:nth-of-type(odd) {
		  background: #e9e9e9;
		}
		.row.header {
		  font-weight: 900;
		  color: #ffffff;
		  background: #ea6153;
		}
		.row.green {
		  background: #27ae60;
		}
		.row.blue {
		  background: #2980b9;
		}
		@media screen and (max-width: 580px) {
		  .row {
			padding: 8px 0;
			display: block;
		  }
		}

		.cell {
		  padding: 6px 12px;
		  display: table-cell;
		  vertical-align: middle;
		}
		@media screen and (max-width: 580px) {
		  .cell {
			padding: 2px 12px;
			display: block;
			vertical-align: middle;
		  }
		}
	</style>
	
</head>

<body>
	<div id="headerwrapper">
		<div id="header">
			<div id="minilogowrapper" onclick="location.href = 'index.html#skipanim';">
				<img src="techspeak/cloud1.svg" class="minilogo" alt="" />
				<img src="techspeak/cloud2.svg" class="minilogo" alt="" />
				<img src="techspeak/testo.svg" class="minilogo" alt="" />
			</div>
		
			<div id="menuwrapper">
				<nav id="nav-main">
					<ul>
						<li><a class="navlink" href="/index.php#skipanim">Home</a></li>
						<li><a class="navlink" href="/chat.php">Chat</a></li>
						<li><a class="navlink" href="/configurazioni.php">Configurazioni</a></li>
						<li><a class="navlink" href="http://www.facebook.com/groups/techspeak" target="_blank">Gruppo Facebook</a></li>
					</ul>
				</nav>
				<div id="nav-trigger">
					<span>Menu</span>
				</div>
				<nav id="nav-mobile">
					<ul>
						<li></li>
						<li><a class="navlink" href="/index.php#skipanim">Home</a></li>
						<li><a class="navlink" href="/chat.php">Chat</a></li>
						<li><a class="navlink" href="/configurazioni.php">Configurazioni</a></li>
						<li><a class="navlink" href="http://www.facebook.com/groups/techspeak" target="_blank">Gruppo Facebook</a></li>
					</ul>
				</nav>
			</div>
		</div>
    </div>
	
	<div id="contentwrapper">
		<h2>Configurazioni consigliate</h2>
		
		<p>Molti hanno necessità di avere un punto di riferimento per iniziare a scegliere i componenti da inserire all'interno della propria build.</p>
		<p>Ed è per questo motivo che il personale di TechSpeak ha scelto per voi il migliore hardware per ogni fascia di prezzo, in modo tale da garantirvi di ottenere le prestazioni ottimali partendo dal vostro budget.</p>
		<p>Tutte le seguenti configurazioni sono orientate al <i>gaming</i>, pertanto si punta a potenza di calcolo grafico. Per altre esigenze chiedere consiglio sul <a href="http://www.facebook.com/groups/techspeak" target="_blank">gruppo Facebook</a>.</p>
		<p style="font-size:0.9em"><i>* I prezzi vengono aggiornati tramite il sito Amazon.it quotidianamente e non includono eventuali spese di spedizione a cause delle politiche di Amazon.<br />
		Alcune variazioni potrebbero non essere visibili fino al giorno successivo.</i></p>
		<br />
		
		<div id="listafasce">
			<ul>
				<p>Fasce di prezzo disponibili:</p>
				<li class="navfasce"><a href="#400">400€</a></li>
				<li class="navfasce"><a href="#500">500€</a></li>
				<li class="navfasce"><a href="#600">600€</a></li>
				<li class="navfasce"><a href="#700">700€</a></li>
				<li class="navfasce"><a href="#800">800€</a></li>
				<li class="navfasce"><a href="#900">900€</a></li>
				<li class="navfasce"><a href="#1100">1100€</a></li>
				<li class="navfasce"><a href="#1300">1300€</a></li>
				<li class="navfasce"><a href="#1500">1500€</a></li>
				<li class="navfasce"><a href="#1700">1700€</a></li>
			</ul>
		</div>
		
		<br />
		<? 
			echo generaTabella($myconn, 400);
			echo generaTabella($myconn, 500);
			echo generaTabella($myconn, 600);
			echo generaTabella($myconn, 700);
			echo generaTabella($myconn, 800);
			echo generaTabella($myconn, 900);
			echo generaTabella($myconn, 1100);
			echo generaTabella($myconn, 1300);
			echo generaTabella($myconn, 1500);
			echo generaTabella($myconn, 1700);

		?>
		
	</div>
</body>
</html>

<?php
// Chiudo la connessione
mysqli_close($myconn);

?>