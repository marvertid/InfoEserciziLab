<!-- Data una stringa, trasformare le lettere minuscole in maiuscole e viceversa
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 42</title>
	</head>
	<body>
		<h1>Esercizio 42</h1>
		<h2>Marverti Diego</h2>
		<?php
			function toLowerUpper($str) {
				for ($i = 0; $i < strlen($str); $i++) {
					if ($str[$i] >= "a" && $str[$i] <= "z") {
						$str[$i] = mb_strtoupper($str[$i]);

					} elseif ($str[$i] >= "A" && $str[$i] <= "Z") {
						$str[$i] = mb_strtolower($str[$i]);
						
					}
				}
				return $str;
			}
			$str = "Sono una Stringa";
			echo "<b>Frase</b>: $str <br />";
		echo "<b>Frase Trasformata</b>: ", toLowerUpper($str), "<br />";
		?>
	</body>
</html>