<!-- Realizzare uno script PHP che calcoli il fattoriale di un numero-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 23</title>
	</head>
	<body>
		<h1>Esercizio 23</h1>
		<h2>Marverti Diego</h2>
		<?php
		function factorial($a) {
			if ($a <= 0) {
				return 1;
			} else {
				return $a * factorial($a - 1);
			}
				
		}
		$a = random_int(1, 5);
		echo "<b>a</b>: $a <br />";
		echo "<b>Fattoriale</b>: " . factorial($a);
		?>
	</body>
</html>