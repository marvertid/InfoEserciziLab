<!-- Un semplice CRC (Cyclic Redundancy Check) di una sequenza di caratteri è calcolato sommando
in modulo 256 una alla volta i valori in ASCII di tutti i caratteri della stringa (eseguendo, cioè, la
somma e ricavando il resto della divisione per 256 di tale valore); scrivere un’applicazione PHP
che calcoli il CRC di una stringa di caratteri. Esempio:
Stringa: "ABC".
Valori ASCII: "A" → 65 "B" → 66 "C" → 67
(65 + 66) % 256 = 131
(131+ 67) % 256 = 198 → CRC
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 52</title>
	</head>
	<body>
		<h1>Esercizio 52</h1>
		<h2>Marverti Diego</h2>
		<?php
			function CRC($string): int {
				$arrayString = str_split($string);

				for ($i = 0; $i < count($arrayString); $i++) {
					$arrayString[$i] = ord($arrayString[$i]);
				}

				while (count($arrayString) > 2) {
					$arrayString[1] = ($arrayString[0] + $arrayString[1]) % 256;

					array_shift($arrayString);
				}
				if (count($arrayString) > 1) {
					$arrayString[0] = ($arrayString[0] + $arrayString[1]) % 256;
				}


				return $arrayString[0];

			}
			$string = "ABC";
			echo "<b>Stringa</b>: $string <br />";
			echo "<b>CRC</b>: " . CRC($string);
		?>
	</body>
</html>