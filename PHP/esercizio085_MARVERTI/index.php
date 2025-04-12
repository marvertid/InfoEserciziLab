<?php
if (!isset($_COOKIE['countVisite'])) {
	$counter = 1;
} else {
	$counter = $_COOKIE['countVisite'];
}
setcookie("countVisite", $counter + 1);
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