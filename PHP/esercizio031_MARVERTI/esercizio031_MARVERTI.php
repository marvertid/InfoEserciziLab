<!--Un numero di Münchhausen è un numero per cui elevando ciascuna delle cifre che lo
compongono a sé stessa e sommando i risultati si ottiene il numero stesso. Scrivere uno script PHP
che verifichi se un dato numero (a quattro cifre) è di Münchhausen. Esempio:
3435 → 33 + 44 + 33 + 55 = 27 + 256 + 27 + 3125 = 3435-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 31</title>
	</head>
	<body>
		<h1>Esercizio 31</h1>
		<h2>Marverti Diego</h2>
		<?php
		function isMunchhausen($n) {
			$cifra1 = $n % 10;
			$cifra2 = floor($n / 10) % 10;
			$cifra3 = floor($n / 100) % 10;
			$cifra4 = floor($n / 1000);

			if ($cifra1 ** $cifra1 + $cifra2 ** $cifra2 + $cifra3 ** $cifra3 + $cifra4 ** $cifra4 == $n)
				return true;
			return false;
		}
		$n = 3435;
		echo "<b>Numero</b>: $n <br />";
		echo "<b> E` un numero di Munchhausen</b>: ", isMunchhausen($n) ? "Si" : "No";
		?>
	</body>
</html>
