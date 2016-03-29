<!DOCTYPE html>
<html>
<head>
	<title>TechSpeak</title>
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="techspeak/jquery.scrollTo.min.js"></script>
	<script src="techspeak/script.js"></script>
	
	<style>
		#widget {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: box;
			display: flex;
			-webkit-flex-shrink: 0;
			flex-shrink: 0;
			-webkit-box-pack: center;
			-o-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-o-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
			width: 100%;
			height: 50px;
			border: 1px solid #212325;
			border-radius: 4px;
			background-clip: padding-box;
			background-color: #343739;
			box-shadow: inset 0 1px 0 hsla(0,0%,100%,.04);
			-webkit-transition: opacity .25s ease-out;
			transition: opacity .25s ease-out;
			color: #fff;
			text-decoration: none;
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
		<h3>Chat testuale e vocale: Discord</h3>
		
		<p>Per tutti gli utenti di TechSpeak è disponibile un server Discord dedicato.</p>
		<p>Innanzitutto: cos'è Discord? Non è altro che un programma di chat vocale e testuale adatto sia ai videogiocatori che a chi vuole solo parlare un po' in compagnia.<br />
			&Egrave; possibile utilizzarlo anche semplicemente dal browser, senza dover scaricare o installare niente! Per farlo basterà cliccare sul pulsante <i>Connettiti</i> qui sotto.</p>
		
		<a id="widget" href="https://discord.gg/0bZLQtXC7x5u3mpt" target="_blank">Connettiti</a>
		
		<br />
		<p>Di seguito troverete una lista dei canali presenti sul server e degli utenti connessi, aggiornata in tempo reale.</p>
		<br />
		<iframe src="https://discordapp.com/widget?id=108484090101010432&theme=dark" style="width: 100%;height: 600px;" allowtransparency="true" frameborder="0"></iframe>
	</div>
</body>
</html>