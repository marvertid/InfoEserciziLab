<!-- Sia data una frase di senso compiuto lunga almeno 25 caratteri. Dopo aver controllato che sia
priva di caratteri multibyte e aver eliminato eventuali segni di punteggiatura (, ; . : ! ?), riportare:
 la stringa ottenuta sostituendo la parola più lunga con smurf;
 la stringa ottenuta concatenando i primi 2 e gli ultimi 3 caratteri di ogni parola;
 la stringa ottenuta sostituendo tutte le vocali con la lettera a.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 51</title>
	</head>
	<body>
		<h1>Esercizio 51</h1>
		<h2>Marverti Diego</h2>
		<?php
			function genHTMLTable($cols, $rows, $data) {
				echo "<table border=1>";
				$count = 0;

				for ($i = 0; $i < $rows; $i++) {
					echo "<tr>";
					for ($j = 0; $j < $cols; $j++) {
						echo "<td style=width:2em;height:2em;text-align:center;font-size:2em>" . $data[$count++] . "</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}

			$string = "La paura uccide la mente.";
			$invertedString = strrev($string);
			$array = str_split($invertedString);
			genHTMLTable(5, 5, $array);
		?>
	</body>
</html>