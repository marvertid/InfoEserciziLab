<!-- Scrivere uno script che, dato un numero intero a 3 cifre, restituisca le 3 cifre separate su 3 righe differenti. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 8</title>
	</head>
	<body>
		<h1>Esercizio 8</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(100, 999);
		echo "<b>Numero:</b> " . $a . "<br />";
		echo "<b>1 cifra:</b>" . floor($a / 100) . "<br />";
		echo "<b>2 cifra:</b>" . floor($a / 10) % 10 . "<br />";
		echo "<b>3 cifra:</b>" . $a % 10 . "<br />";
		?>
		
	</body>
</html>