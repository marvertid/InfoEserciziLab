<!-- Scrivere uno script che, dato il prezzo in euro di un articolo in vendita, lo restituisca scontato del
10%, 25% e 33%. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 6</title>
	</head>
	<body>
		<h1>Esercizio 6</h1>
		<h2>Marverti Diego</h2>
		<?php
		$prezzo = random_int(10, 100);
		$prezzo10Perc = $prezzo - ($prezzo * 0.10);
		$prezzo25Perc = $prezzo - ($prezzo * 0.25);
		$prezzo33Perc = $prezzo - ($prezzo * 0.33);

		echo "<b>Prezzo:</b> " . $prezzo . "<br />";
		echo "<b>Prezzo scontato del 10%:</b> " . $prezzo10Perc . "<br />";
		echo "<b>Prezzo scontato del 25%:</b> " . $prezzo25Perc . "<br />";
		echo "<b>Prezzo scontato del 33%:</b> " . $prezzo33Perc . "<br />";
		?>
		
	</body>
</html>