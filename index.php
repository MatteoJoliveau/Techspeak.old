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
	<script>
		$( window ).load( function(){			
			$('#cloud1').delay(500).animate({opacity: 1}, 500, function(){
				$('#cloud2').animate({opacity: 1}, 500, function(){
					$('#testo').animate({opacity: 1}, 500, function(){
						$('.enter').animate({opacity: 1}, 200);
					});
				});
			});
		});
	</script>
	
	<style>
	.person{
		position:relative;
		top:50px;
		width:100%;
		text-align:center;
		margin-bottom:50px;
	}
	.circle {
		border-radius: 50%;
		height: 100px;
		width: 100px;
		background-position: center;
		background-size: contain;
		margin: 0 auto 15px auto;
		border: solid 3px #218BD2;
	}
	#antonio{
		background-image: url(photos/antonio.jpg);
	}
	#matteo{
		background-image: url(photos/matteo.jpg);
	}
	#stefano{
		background-image: url(photos/stefano.jpg);
	}
	
	@media (min-width: 900px){
		.person{
			top:50px;
			width:30%;
			display:inline-table;
			margin-right:3%;
		}
	}
	</style>
</head>

<body>

	<svg height="0" xmlns="http://www.w3.org/2000/svg">
		<filter id="drop-shadow">
			<feOffset dx="1" dy="1" result="offsetblur"/>
			<feFlood flood-color="rgba(0,0,0,0.5)"/>
			<feComposite in2="offsetblur" operator="in"/>
			<feMerge>
				<feMergeNode/>
				<feMergeNode in="SourceGraphic"/>
			</feMerge>
		</filter>
	</svg>

	<div id="wrapper">
		<img src="techspeak/cloud1.svg" alt="" class="logo" id="cloud1" />
		<img src="techspeak/cloud2.svg" alt="" class="logo" id="cloud2" />
		<img src="techspeak/testo.svg" alt="" class="logo" id="testo" />
		<a class="enter" href="javascript:scroll();">entra nel sito</a>
	</div>
	
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
			<a name="skipanim">&nbsp;</a>
		</div>
    </div>
	
	<div id="contentwrapper">
		<h3>Benvenuti!</h3>
		<p>TechSpeak è un luogo di scambio di opinioni e di idee, una grande famiglia che unisce persone accomunate da un'unica grande passione: <i>la tecnologia</i>.</p>
		<p>Questo sito è un appoggio per il <a href="http://facebook.com/groups/techspeak">gruppo Facebook dedicato</a>, e fornisce alcuni servizi utili agli utenti, come ad esempio configurazioni per PC assemblati già pronte per ogni fascia di prezzo o il link al nostro server di chat vocale.</p>
		
		<br /><br />
		<h2>Staff e collaboratori</h2>
		<div class="person">
			<div class="circle" id="antonio"></div>
			<h3>Antonio Pitasi</h3>
			<p>Amante della tecnologia e studente di Informatica presso l'Università di Pisa.<br />
				Developer di questo sito internet e amministratore nel gruppo Facebook.</p>
		</div>
		<div class="person">
			<div class="circle" id="matteo"></div>
			<h3>Matteo Joliveau</h3>
			<p>Studente di Informatica all'Università degli Studi di Milano, Game Director e programmatore C++.<br />
Fondatore di TechSpeak come gruppo di tecnologia libero e professionale, pubblica video su YouTube sui canali GamesCodex e NerdClub Channel.</p>
		</div>
		<div class="person">
			<div class="circle" id="stefano"></div>
			<h3>Stefano Dell'Anna</h3>
			<p>Studente di elettrotecnica ed automazione, appassionato di tecnologia e tutto ciò che la riguarda.
				Curatore della sezione <i>Configurazioni</i> di questo sito.</p>
		</div>
			
	</div>
</body>
</html>