<!--  Generare in modo casuale una stringa contenente 30 caratteri alfanumerici. Scrivere uno script
che permetta di ricavare il numero di occorrenze di coppie di caratteri costituite, nell’ordine,
da una vocale e un valore numerico. Esempio:
3ve8ryth1ng1sgo1i1ng2b34lright → 3
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 48</title>
	</head>
	<body>
		<h1>Esercizio 48</h1>
		<h2>Marverti Diego</h2>
		<?php
			define("VOWELS", "a, e, i, o, u");
			define("NUMBERS", "1 2 3 4 5 6 7 8 9");
			function genAlhpanumericString(): string {
				$string = "";
				for ($i = 0; $i < 30; $i++) {
					$random = random_int(48, 90);
					$string .= match (true) {
						$random <= 57 => $random - 48,
						$random >= 65 && $random <= 90 => chr($random),
						default => "",
					};
				}
				return strtolower($string);
			}
			function countCouple($string) {
				$count = 0;
				for ($i = 0; $i < strlen($string); $i++) {
					if (str_contains(NUMBERS, $string[$i]) && (str_contains(VOWELS, $string[$i-1]) || str_contains(VOWELS, $string[$i-1]))) {
						$count++;
					}
				}
				return $count;
			}
			$string = "3ve8ryth1ng1sgo1i1ng2b34lright";
			echo "<b>Stringa Alphanumerica</b>: $string"  . "<br />";
			echo "<b>Numero di coppie di vocali e numeri</b>: " . countCouple($string);
		?>
	</body>
</html>