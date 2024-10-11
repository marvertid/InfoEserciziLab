<!-- Scrivere uno script che, dato un tempo espresso in secondi, restituisca l’equivalente in ore, minuti
e secondi. Es.: 7384 secondi corrispondono a 2 ore, 3 minuti e 4 secondi.-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 16</title>
	</head>
	<body>
		<h1>Esercizio 16</h1>
		<h2>Marverti Diego</h2>
		<?php
		$secondi = 7384;
		$minuti = floor(($secondi % 3600) / 60);
		$ore = floor($secondi / 3600);
		$secondiCalcolato = $secondi % 60;

		echo "$secondi secondi corrispondono a: $ore ore, $minuti minuti e $secondiCalcolato secondi ";
		?>
	</body>
</html>