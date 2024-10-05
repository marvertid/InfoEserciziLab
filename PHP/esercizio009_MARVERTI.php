<!-- Siano dati due numeri interi di due cifre ab e cd, dove ogni lettera rappresenta nell’ordine una
singola cifra (se ab è pari a 74, a vale 7 e b vale 4). Moltiplicare fra di loro i due numeri implementando l’algoritmo di Karatsuba:
ab · cd = a · c · 102 + (a · c + b · d - (a - b) · (c - d)) · 10 + b · d-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 9</title>
	</head>
	<body>
		<h1>Esercizio 9</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(10, 99);
		$b = random_int(10, 99);
		$cifra1a = floor($a / 10);
		$cifra2a = $a % 10;
		$cifra1b = floor($b / 10);
		$cifra2b = $b % 10;
		$espressione = $cifra1a * $cifra1b * 100 + ($cifra1a * $cifra1b + $cifra2a * $cifra2b - ($cifra1a - $cifra2a) * ($cifra1b - $cifra2b)) * 10 + $cifra2a * $cifra2b;
		echo "<b>Numero 1:</b>" . $a . "<br />";
		echo "<b>Numero 2:</b>" . $b . "<br />";
		echo "<b>Numero 1 * Numero 2 tramite algoritmo di Karatsuba:</b>" . $espressione . "<br />";
		?>
		
	</body>
</html>