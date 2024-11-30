<!--  Scrivere un’applicazione PHP per verificare se un indirizzo IPv4 sia valido o meno; individuarne,
inoltre, la classe di appartenenza -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 1 </title>
	</head>

	<body>
		<h1>Esercizio 1 Ricezione Dati</h1>
		<h2>Marverti Diego</h2>
		<?php

		function isValidIP($ip): bool {
			$arrayS = explode(".", $_POST["inputIP"]);
				if (count($arrayS) == 4) {
					foreach ($arrayS as $number) {
						if (is_numeric($number) && $number < 255) {
							return true;
						}
					}
				}
				return false;
		}
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			if(empty($_POST["inputIP"])) {
				echo "<p><span style=color:red>Non hai inserito nessun valore!</span></p>";
			} else {
				if(isValidIP($_POST["inputIP"])) {
					$arrayS = explode(".", $_POST["inputIP"]);
					$convertedBase = base_convert($arrayS[0], 10, 2);
					$arrayExplodedBase = str_split($convertedBase);
					if ($arrayExplodedBase[0] == 0) {
						echo "CLASSE A";
					} else {
						echo "suca";
					}
				} else {
					echo "test";
				}
			}
		}
		?>
	</body>
</html>