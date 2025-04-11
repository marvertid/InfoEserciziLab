<?php
/*Memorizzare in un cookie la data e l'ora di ultima visita della pagina PHP*/

setcookie("dataOra", date("Y-m-d H:i:s"), time() + 60 * 5, "/");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ESERCIZIO 83 MARVERTI</title>
		<meta charset="utf-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
	</head>
	<body>
		<p><?php echo $_COOKIE['dataOra']; ?></p>
	</body>
</html>