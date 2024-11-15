<!-- Data una stringa, determinare quante vocali e quante consonanti contiene (ignorare le lettere
accentate).
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 41</title>
	</head>
	<body>
		<h1>Esercizio 41</h1>
		<h2>Marverti Diego</h2>
		<?php
		define("VOWELS", "aeiou");

		function countVowels($str): int {
			$count = 0;
			$str2 = mb_strtolower($str);
			$arr = str_split($str2);
			foreach ($arr as $c) {
				if (str_contains(VOWELS, $c)) {
					$count++;
				}
			}
			return $count;
		}
		function countConsonant($str): int {
			$count = 0;
			$str2 = mb_strtolower($str);
			$arr = str_split($str2);
			foreach ($arr as $c) {
				if (!str_contains(VOWELS, $c) && $c != " ") {
					$count++;
				}
			}
			return $count;
		}

		$str = "ciao mondo";
		echo "<b>Frase</b>: $str <br />";
		echo "<b>Vocali</b>: ", countVowels($str), "<br />";
		echo "<b>Consonanti</b>: ", countConsonant($str), "<br />";
		
		?>
	</body>
</html>