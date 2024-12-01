<!-- Scrivere uno script in grado di ricavare il numero di cifre di un dato intero positivo. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 28</title>
	</head>
	<body>
		<h1>Esercizio 28</h1>
		<h2>Marverti Diego</h2>
		<?php
		function countDigit($n) {
			$i = 0;
			$temp = $n;
			while ($temp != 0) {
				$temp = floor($temp / 10); 
				$i++;
			} 
			return $n == 0 ? 1 : $i;
		}
		$n = 12397;
		echo "<b>Numero</b>: $n <br />";
		echo "<b>Numero di cifre</b>: ", countDigit($n);
		?>
	</body>
</html>
