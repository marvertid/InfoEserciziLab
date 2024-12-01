<!-- Dati due numeri interi, individuare il più piccolo implementando il seguente algoritmo:
a. calcolare la somma dei due numeri (S);
b. calcolare il valore assoluto della differenza dei due numeri (D);
c. ricavare il numero più piccolo calcolando (S - D) / 2. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 10</title>
	</head>
	<body>
		<h1>Esercizio 10</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 100);
		$b = random_int(1, 100);

		$valoreAssoluto = abs($a - $b);
		$minimo = ($a + $b - $valoreAssoluto) / 2;

		echo "<b>Numero 1: </b>" . $a . "<br />";
		echo "<b>Numero 2: </b>" . $b . "<br />";
		echo "<b>Minimo: </b>" . $minimo . "<br />";
		?>
		
	</body>
</html>