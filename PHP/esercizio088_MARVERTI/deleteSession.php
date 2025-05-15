<?php 
	session_start();
	$_SESSION = array();
	setcookie("PHPSESSID", "", time() - 1, "/");
	session_destroy();
	header("Location: index.php");
?>