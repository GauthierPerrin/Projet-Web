<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: linen;
}

p.1 {
  color: maroon;
  margin-left: 60px;
} 
</style>
</head>
<body>
	<p><center><b><h1> Creation de son compte </h1></b></center></p>

	<form action="creationcompte.php" method="post">
		<p>Nouveau Login : <input style="margin-left:93px" type="text" name="pseudo" /></p>
		<p>Nouveau mot de passe : <input style="margin-left:49px" type="password" name="pass" /></p>
		<p>Confirmation du mot de passe : <input type="password" name="pass1" /></p>
		<table>
			<thead>
				<tr>
					<th><p><input type="submit" value="Valider"></p></th>
					<th><p><input type="reset" value="Renitialiser"></p></th>	        
				</tr>
			</thead>
		</table>
	
</form>
<body>
</html>