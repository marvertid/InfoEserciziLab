<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 2</title>
	</head>
	<body>
		<h1>Esercizio 2</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 100);
		$b = random_int(1, 100);
		$c = random_int(1, 100);
		echo "<b>a:</b> " . $a . " <b>b:</b> " . $b . " <b>c:</b> " . $c . "<br />";
		$somma = $a + $b + $c;
		echo "<b>Somma:</b> " . $somma . "<br />";
		printf("<b>Media Aritmetica:</b> %.2f ", $somma / 3);
		?>
		
	</body>
</html>