<!-- Calcolare il punteggio ottenuto da un atleta in una gara di tuffi dal trampolino, implementando il
seguente algoritmo:
a. Dieci giudici assegnano un voto compreso fra 2 e 10 (generato casualmente);
b. Vengono quindi sommati tutti i voti ad eccezione del più alto e del più basso.
c. Tale somma viene moltiplicata per un coefficiente di difficoltà, un numero reale compreso
fra 1 e 5-->
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
		$giudice1 = random_int(2, 10);
		$giudice2 = random_int(2, 10);
		$giudice3 = random_int(2, 10);
		$giudice4 = random_int(2, 10);
		$giudice5 = random_int(2, 10);
		$giudice6 = random_int(2, 10);
		$giudice7 = random_int(2, 10);
		$giudice8 = random_int(2, 10);
		$giudice9 = random_int(2, 10);
		$giudice10 = random_int(2, 10);
		$max = max($giudice1, $giudice2, $giudice3, $giudice4, $giudice5, $giudice6, $giudice7, $giudice8, $giudice9, $giudice10);
		$min = min($giudice1, $giudice2, $giudice3, $giudice4, $giudice5, $giudice6, $giudice7, $giudice8, $giudice9, $giudice10);
		$sum = - $max - $min + $giudice1 + $giudice2 + $giudice3 + $giudice4 + $giudice5 + $giudice6 + $giudice7 + $giudice8 + $giudice9 + $giudice10;
		$voto = $sum * (random_int(10, 50) / 10);
		echo "Voto: $voto";
		?>
	</body>
</html>