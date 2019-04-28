<?php session_start();?>

Login :<?php echo htmlspecialchars($_POST['pseudo']); ?><br>
Mot de passe : <?php echo  $_POST['pass']; ?> <br>
Confirmation du mot de passe : <?php echo  $_POST['pass1']; ?> <br> 


<?php 
if ($_POST['pass'] == $_POST['pass1']) {
	echo "Mot de passe :";
	echo  $_POST['pass'];echo"<br>";
	header('Location: connexion.php');


}
else {
	echo "pasconfigurer";
	header('Location: nouveaucompte.php');

}
	
?>
