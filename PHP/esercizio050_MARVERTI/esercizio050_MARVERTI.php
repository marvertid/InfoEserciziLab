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
		<title>ESERCIZIO 50</title>
	</head>
	<body>
		<h1>Esercizio 50</h1>
		<h2>Marverti Diego</h2>
		<?php
			define("PUNCTUATION", [",", ";", ".", ":", "!", "?"]);
			define("VOWELS", ["a", "e", "i", "o", "u"]);	

			function isMb($string): bool {
				return !(strlen($string) == mb_strlen($string));
			}

			function popPunctuation($string): string {
				return str_replace(PUNCTUATION, "", $string);
			}


			function longesWordChanged($subject, $replace): string {
			    $arrString = explode(" ", $subject);

			    $longestWord = "";
			    foreach ($arrString as $word) {
			        if (strlen($word) > strlen($longestWord)) {
			            $longestWord = $word;
			        }
			    }

			    $subject = str_replace($longestWord, $replace, $subject);

   				 return $subject;
			}

			# la stringa ottenuta concatenando i primi 2 e gli ultimi 3 caratteri di ogni parola;
			function stringfirst2last3($string): string {
				$arrString = explode(" ", $string);
				$result = "";
				foreach ($arrString as $s) {
					if (strlen($s) > 5) {
						$result .= $s[0] . $s[1];
						$result .= substr($s, strlen($s) - 3);						
					} else {
						$result .= $s;
					}

				}
				return $result;
			}

			function replaceVowels($subject, $replace): string {
				return str_replace(VOWELS, $replace, $subject);
			}
			
			$string = "Lorem ipsum, exercitation. ullamco laboris!";

			echo "<b>Stringa</b>: $string <br />";
			
			if(!isMB($string)) {
				$string = popPunctuation($string);
				echo "<b>Stringa con l'ultima parola sustituita da smurf</b>: " . longesWordChanged($string, "smurf") . "<br />";
				echo "<b>Stringa con solo le prime 2 e ultime 3 lettere di ogni parola</b>: " . stringfirst2last3($string) . "<br />";
				echo "<b>Stringa con le vocali sostituite dalla lettera a</b>: " .  replaceVowels($string, "a");
			} else {
				echo "Stringa multibyte!!";
			}

		?>
	</body>
</html>