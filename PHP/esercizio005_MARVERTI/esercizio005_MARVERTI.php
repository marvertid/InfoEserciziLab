<!-- Scrivere uno script che, dato un numero con almeno 4 cifre decimali, lo approssimi alla terza cifra
decimale sempre per difetto. Es.: 123.45678 → 123.456 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 5</title>
	</head>
	<body>
		<h1>Esercizio 5</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 1000000) / 1000000;
		echo "<b>Numero:</b> " . $a . "<br />";
		$temp = $a * 1000;
		$approssimazione = floor($temp);
		echo "<b>Approssimazione:</b> " . $approssimazione / 1000;
		?>
		
	</body>
</html>