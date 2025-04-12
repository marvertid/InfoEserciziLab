<?php 
	setcookie("countVisite", "", time() - 1, "/");
	setcookie("messaggio", "", time() - 1, "/");
	header("Location: index.php");
?>