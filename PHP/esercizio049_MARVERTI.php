<!-- Hexspeak è una forma di scrittura ideata da alcuni programmatori. La sua particolarità è quella
di utilizzare le sole 16 cifre del sistema numerico esadecimale (da 0 a F).
 La cifra 0 viene usata al posto della lettera O;
 La cifra 1 al posto della I;
 La cifra 2 al posto della Z;
 La cifra 3 al posto della E;
 La cifra 5 al posto della S;
 La cifra 7 al posto della T.
Esempi:
 Office: 0x0FF1C3
 Disease: 0xD153A53
 Code: 0xC0D3
Scrivere uno script che, una volta stabilito se una data parola è rappresentabile in Hexspeak, ne
fornisca tale rappresentazione.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 49</title>
	</head>
	<body>
		<h1>Esercizio 49</h1>
		<h2>Marverti Diego</h2>
		<?php
			define("LETTERS", ["O", "I", "Z", "E", "S", "T"]);
			define("NUMBERS", ["0", "1", "2", "3", "5", "7"]);
			

			function stringToHexSpeak($string): string {
				$string = strtoupper($string);
				$hex = "0x";
				$string = str_replace(LETTERS, NUMBERS, $string);
				return $hex . $string;
			}


			$string = "Office";
			echo "<b>Stringa originale</b>: $string " . "<br />";
			echo "<b>Hexspeak</b>: " . stringToHexSpeak($string);
		?>
	</body>
</html>