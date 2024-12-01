<!-- Convertire in binario (su 8 bit) un numero intero in base 10 compreso fra 2 e 255 (inclusi) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 11</title>
	</head>
	<body>
		<h1>Esercizio 11</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(2, 255);
		$bytes = base_convert($a, 10, 2);

		echo "<b>Numero in base decimale: </b>" . $a . "<br />";
		echo "<b>Numero in base binaria: </b>" . $bytes;
		?>
		
	</body>
</html>