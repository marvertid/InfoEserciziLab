<!-- Dati i tre lati di un triangolo, calcolarne la superficie applicando la formula di Erone:-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 19</title>
	</head>
	<body>
		<h1>Esercizio 19</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 20);
		$b = random_int(1, 20);
		$c = random_int(1, 20);
		$area = sqrt((($a + $b + $c) * (-$a + $b + $c) * ($a - $b + $c) * ($a + $b- $c))) / 4;
		echo "<b>Lato a</b>: $a <br />";
		echo "<b>Lato b</b>: $b <br />";
		echo "<b>Lato c</b>: $c <br />";
		echo "<b>Area</b>: $area <br />";
		?>
	</body>
</html>