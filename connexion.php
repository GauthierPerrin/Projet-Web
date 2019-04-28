<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: linen;
}

</style>
</head>
<body>

<p><center><b><h1> Connexion a son compte </h1></b></center></p>
<form action = "index.php">
	<center><button> Accueil </button></center>
</form>
<?php if (isset($_SESSION['message1'])) {
			echo $_SESSION['message1'];
			unset($_SESSION['message1']);
	}
?>
<form action="log.php" method="post">
	<p>Login : <input style="margin-left:95px" type="text" name="log" value = " "/></p>
	<p>Mot de passe : <input style="margin-left:49px" type="password" name="pass" /></p>
	<table> 
		<thead>
			<tr>
				<th> <p><input type="submit" value="Se connecter"></p></th>
				<th> <p><input type="reset" value="Renitialiser"></p></th>	        
			</tr>
		</thead>
	</table>
</form>
<body>
</html>



