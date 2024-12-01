<!-- Sia data una stringa contenente un numero in virgola mobile; scrivere uno script PHP che
permetta di ricavarne il numero di cifre. Esempio:
-72.319 → 5 cifre
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 43</title>
	</head>
	<body>
		<h1>Esercizio 43</h1>
		<h2>Marverti Diego</h2>
		<?php
			define("DIGIT", "0123456789");
			
			function countDigit($number) {
				$arr = str_split($number);
				$count = 0;
				foreach ($arr as $c) {
					if (str_contains(DIGIT, $c)) {
						$count++;
					}
				}
				return $count;
			}
			$number = -72.319;
			echo "<b>Numero</b>: $number <br />";
			echo "<b>Numero di cifre</b>: ", countDigit($number) , "<br />";
		?>
	</body>
</html>