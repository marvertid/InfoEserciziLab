<!-- La radice numerica di un numero è il risultato della somma delle sue cifre, reiterata fino a ottenere
un valore a una sola cifra, quindi compreso fra 0 e 9. Calcolare la radice numerica di un intero a 5
cifre. Es.: 11138 → 14 → 5.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 31</title>
	</head>
	<body>
		<h1>Esercizio 31</h1>
		<h2>Marverti Diego</h2>
		<?php
		function sumDigits($n) {
			$temp = 0;
			while ($n != 0) {
				$temp += $n % 10; 
				$n = floor($n / 10);
			}

			return $temp;
		}

		function countDigit($n) {
			$i = 0;
			$temp = $n;
			while ($temp != 0) {
				$temp = floor($temp / 10); 
				$i++;
			} 
			return $n == 0 ? 1 : $i;
		}

		function numericRoot($n) {
			$temp = $n;
			do {
				$temp1 = sumDigits($temp);
				$temp = $temp1;
			} while (countDigit($temp) > 1);

			return $temp;
		}	
				

			
		$n = 11138;
		echo "<b>Numero</b>: $n <br />";
		echo "<b> Radice Naturale</b>: ", numericRoot($n);
		?>
	</body>
</html>
