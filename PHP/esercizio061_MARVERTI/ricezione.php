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
						if (is_numeric($number) && $number <= 255) {
							return true;
						}
					}
				}
				return false;
		}

		function IpClass($ip): string {
			$arrayS = explode(".", $ip);
					$convertedBase = base_convert($arrayS[0], 10, 2);
					$convertedBase = strrev($convertedBase);
					while(strlen($convertedBase) < 8) {
						$convertedBase .= "0";
					}
					$convertedBase = strrev($convertedBase);
					$arrayExplodedBase = str_split($convertedBase);
					return match (true) {
						implode(array_chunk($arrayExplodedBase, 4)[0]) == "1111" => "CLASSE E",
						implode(array_chunk($arrayExplodedBase, 4)[0]) == "1110" => "CLASSE D",
						implode(array_chunk($arrayExplodedBase, 3)[0]) == "110" => "CLASSE C",
						implode(array_chunk($arrayExplodedBase, 2)[0]) == "10" => "CLASSE B",
						$arrayExplodedBase[0] == "0" => "CLASSE A",
						default => null,
					};
		}

		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			if(empty($_POST["inputIP"])) {
				echo "<p><span style=color:red>Non hai inserito nessun valore!</span></p>";
			} else {
				if(isValidIP($_POST["inputIP"])) {
					echo "<p>" , IpClass($_POST["inputIP"]) , "</p>";
				} else {
					echo "<p><span style=color:red>Non hai inserito un indirizzo ip valido!</span></p>";
				}
			}
		}
		?>
	</body>
</html>
