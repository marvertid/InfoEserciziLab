<!-- Dati tre interi stabilire se possono essere le lunghezze dei lati di un triangolo. In un triangolo, un
lato è sempre minore della somma degli altri due.-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 21</title>
	</head>
	<body>
		<h1>Esercizio 21</h1>
		<h2>Marverti Diego</h2>
		<?php
		function isTriangle($a, $b, $c) {
			if ($a < ($b + $c) and $b < ($a + $c) and $c < ($a + $b))
				return true;
			return false;
		}
		$a = random_int(1, 40);
		$b = random_int(1, 40);
		$c = random_int(1, 40);

		echo "<b>a</b>: $a, <b>b</b>: $b, <b>c</b>: $c <br />";
		echo "<b>E` un triangolo</b>: ", isTriangle($a, $b, $c) ? "true" : "false";
		?>
	</body>
</html>