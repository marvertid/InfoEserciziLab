<!--I numeri narcisisti sono quelli in cui la somma delle loro 3 cifre, ciascuna elevata alla terza potenza,
dà lo stesso numero iniziale. Scrivere uno script PHP che verifichi se un dato numero (a tre cifre) è
narcisistico. Esempi:
 153 → 13 + 53 + 33 = 153
 370 → 33 + 73 + 03 = 370 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 30</title>
	</head>
	<body>
		<h1>Esercizio 30</h1>
		<h2>Marverti Diego</h2>
		<?php
		function isNarcisist($n) {
			$cifra1 = $n % 10;
			$cifra2 = floor($n / 10) % 10;
			$cifra3 = floor($n / 100);

			if ($cifra1 ** 3 + $cifra2 ** 3 + $cifra3 ** 3 == $n)
				return true;
			return false;
		}
		$n = 370;
		echo "<b>Numero</b>: $n <br />";
		echo "<b> E` un numero narcisista</b>: ", isNarcisist($n) ? "Si" : "No";
		?>
	</body>
</html>
