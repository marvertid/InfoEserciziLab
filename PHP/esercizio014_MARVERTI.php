<!--Si scriva uno script che, dati quattro numeri, visualizzi la loro media geometrica, ovvero la radice n-esima del prodotto di n valori-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 14</title>
	</head>
	<body>
		<h1>Esercizio 14</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 100);
		$b = random_int(1, 100);
		$c = random_int(1, 100);
		$d = random_int(1, 100);
		$e = random_int(1, 100);
		echo "<b>Valori numerici:</b> $a, $b, $c, $d, $e <br />";
		$mediaGeometrica = pow(($a * $b * $c * $d * $e), (1/5));
		echo "<b>Media Geometrica:</b> $mediaGeometrica";
		?>
		
	</body>
</html>