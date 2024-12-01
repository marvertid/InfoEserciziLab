<!--Sia dato un numero naturale non terminante per zero; scrivere un programma che ne inverta laposizione delle cifre. Es.: 12345 → 54321 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 29</title>
	</head>
	<body>
		<h1>Esercizio 29</h1>
		<h2>Marverti Diego</h2>
		<?php
		function invertDigit($n) {
			$temp = "";
			do {
				$temp .= $n % 10;
				if ($n != 0) 
					$n = floor($n / 10);
			} while ($n != 0);

			return $temp;
		}
		$n = random_int(1000, 1000000);
		echo "<b>Numero</b>: $n <br />";
		echo "<b> Numero Invertito</b>: ", invertDigit($n);
		?>
	</body>
</html>
