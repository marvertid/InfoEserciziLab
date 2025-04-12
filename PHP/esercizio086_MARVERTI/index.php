<?php
date_default_timezone_set("Europe/Rome");
$lastVisit = date("Y-m-d H:i:s");
if (!isset($_COOKIE['countVisite'])) {
	$counter = 0;
	$messaggio = "Benvenuto!";
} else {
	$counter = $_COOKIE['countVisite'];
	$messaggio = $_COOKIE['messaggio'] . ", " . $lastVisit;
	$messaggio = str_replace("Benvenuto!, ", "", $messaggio);
}
setcookie("countVisite", $counter + 1, time() + 60 * 5, "/");
setcookie("messaggio", $messaggio, time() + 60 * 5, "/");

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ESERCIZIO 86 MARVERTI DIEGO</title>
		<meta charset="utf-8" />
		<meta charset = "MARVERTI DIEGO 5AI" />
	</head>
	<body>
		<p>Counter visite: <?php echo $counter; ?></p>
		<p>Messaggio: <?php echo $messaggio ?> </p>
		<p><a href="deleteCookies.php">Cancella cookies!</a></p>
	</body>
</html>