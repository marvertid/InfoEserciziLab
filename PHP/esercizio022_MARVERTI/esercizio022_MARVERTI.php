<!--Scrivere un programma in grado di calcolare a^b, con a e b interi, senza l’utilizzo della funzione
pow() e dell’operatore **.-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 22</title>
	</head>
	<body>
		<h1>Esercizio 22</h1>
		<h2>Marverti Diego</h2>
		<?php
		function elevate($a, $b) {
			$temp = 1;
			for ($i = 0; $i < $b; $i++) {
				$temp *= $a;
			}
			return $temp;
		}
		$a = random_int(1, 40);
		$b = random_int(1, 5);
		echo "<b>a</b>: $a, <b>b</b>: $b<br />";
		echo "<b>a^b</b>: " . elevate($a, $b);
		?>
	</body>
</html>