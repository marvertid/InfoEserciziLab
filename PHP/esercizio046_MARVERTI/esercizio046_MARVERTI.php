<!-- Un numero autobiografico è un numero naturale di 10 cifre in cui ciascuna cifra alla posizione
n indica quante occorrenze della cifra n sono presenti. Ad esempio, 6210001000 è
autobiografico poiché:
 Contiene 6 in posizione 0, indicando che vi sono sei 0 nel numero;
 Contiene 2 in posizione 1, indicando che vi sono due 1 nel numero;
 Contiene 1 in posizione 2, indicando che c'è un solo 2 nel numero;
 …
 Contiene 0 in posizione 9, indicando che non vi sono 9 nel numero.
Scrivere uno script che verifichi se un dato numero è autobiografico
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 46</title>
	</head>
	<body>
		<h1>Esercizio 46</h1>
		<h2>Marverti Diego</h2>
		<?php
		function isAutobiographic($num) {
			$arr = str_split($num);
			$countPos = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
			for ($i = 0; $i < 10; $i++) {
				$countPos[$arr[$i]]++;
			}
			return ($arr == $countPos); 
		}
		$num = 6210001000;

		echo "<b>Numero</b>: $num <br />";
		echo "<b>E` autobiografico</b>: " , isAutobiographic($num) ? "Si" : "No";
		?>
	</body>
</html>