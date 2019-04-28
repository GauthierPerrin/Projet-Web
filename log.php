<?php 
session_start();
if ($_POST['pass'] == "toto") {
	echo  $_POST['pass'];
	echo  $_POST['log'];
	echo  $_SESSION['user_id'];
	$_SESSION['user_id'] = $_POST['log'];
	header('Location: listedesvins.php');
}
else {
	echo "Reconnexion utile";
	echo  $_POST['pass']; 
	$_SESSION['message1'] = "Il faut vous connecter";
	header('Location: connexion.php');

}

?>

