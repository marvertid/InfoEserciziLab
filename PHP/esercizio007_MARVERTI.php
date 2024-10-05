<!-- Effettuare la divisione fra due numeri interi, stampando separatamente quoziente e resto. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 7</title>
	</head>
	<body>
		<h1>Esercizio 7</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 100);
		$b = random_int(1, 100);
		$quoziente = floor(($a / $b));
		$resto = $a % $b;

		echo "<b>a:</b> " . $a . "<br />";
		echo "<b>b:</b> " . $b . "<br />";
		echo "<b>Quoziente:</b> " . $quoziente . "<br />";
		echo "<b>Resto:</b> " . $resto . "<br />";
		?>
		
	</body>
</html>