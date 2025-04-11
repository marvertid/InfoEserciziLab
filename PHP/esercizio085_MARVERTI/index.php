<?php
if (!isset($_COOKIE['countVisite'])) {
	$counter = 0;
} else {
	setcookie("countVisite", $counter + 1);
	$counter = $_COOKIE['countVisite'];
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ESERCIZIO 85 MARVERTI DIEGO</title>
		<meta charset="utf-8" />
		<meta charset = "MARVERTI DIEGO 5AI" />
	</head>
	<body>
		<p>Counter visite: <?php echo $counter; ?></p>
	</body>
</html>