<?php require_once('microProtector.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aggiorna Prodotto - TechSpeak</title>
	<link href='style/style.css' rel='stylesheet' type='text/css'>
</head>

<body>
	<form action="func/eliminaprodotto.php" method="post" class="form-container">
		<div class="form-title"><h2>Elimina prodotto</h2></div>
		<div class="form-title">Fascia</div>
		<input class="form-field" type="text" name="fascia" /><br />
		<div class="form-title">Codice prodotto</div>
		<input class="form-field" type="text" name="code" /><br />
		<div class="submit-container">
			<input class="submit-button" type="submit" value="Invia" />
		</div>
	</form>
</body>
</html>
