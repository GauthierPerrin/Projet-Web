<?php 
session_start();
	if (isset($_SESSION['user_id'])) {
			echo "Liste des vins ";
	}
	else{
		header('Location: connexion.php');
	}

?>
 