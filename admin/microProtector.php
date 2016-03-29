<?php
/**
 * ****************************************************************************
 * Micro Protector
 * 
 * Version: 1.0
 * Release date: 2007-09-10
 * 
 * USAGE:
 *   Define your requested password below and inset the following code
 *   at the beginning of your page:
 *   <?php require_once("microProtector.php"); ?>
 * 
 *   See the attached example.php.
 * 
 ******************************************************************************/


$Password = 'cazzo di cane'; // Set your password here



/******************************************************************************/
   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['submit_pwd']) ? $_POST['submit_pwd'] : '';
      
   if ($pass != $Password) {
         showForm("Password errata. Il tuo indirizzo IP è stato registrato.");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
   
function showForm($error="LOGIN"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Micro Protector</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
		<div class="caption"><?php if ($error != "LOGIN") echo $error; ?></div>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd" class="form-container">
			<div class="form-title"><h2>Inserisci la parola d'ordine</h2></div>
			<div class="form-title">Password</div>
			<input class="form-field" name="submit_pwd" type="password" /><br />
			<div class="submit-container">
				<input class="submit-button" type="submit" value="Invia" />
			</div>
		</form>

	</div>
</body>       

<?php   
}
?>