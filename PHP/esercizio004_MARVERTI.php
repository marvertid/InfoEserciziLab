<!-- Si scriva uno script che, dato un numero in virgola mobile, visualizzi gli interi ottenuti approssimando per difetto e per eccesso -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 4</title>
	</head>
	<body>
		<h1>Esercizio 4</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = rand(45, 1000);
		$b = rand(23, 1000);
		$randomInt = $a / $b;

		echo "<b> Numero randomico: </b> " . $randomInt . "<br />";
		echo "<b> Difetto: </b>" . floor($randomInt) . "<br />";
		echo "<b> Eccesso: </b>" . ceil($randomInt) . "<br />";
		?>
		
	</body>
</html>