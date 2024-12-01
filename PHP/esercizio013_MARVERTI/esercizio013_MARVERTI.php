<!--Si scriva uno script che, dati cinque valori interi con i relativi pesi, visualizzi la loro media pesata o
ponderata. A differenza della media aritmetica, nella media pesata, ciascun numero ha una
determinata importanza (peso) che influisce sul calcolo; il valore di tale media è dato dalla somma
dei prodotti di ciascun numero per il rispettivo peso, fratto la somma dei pesi. Dati n valori
numerici:-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 13</title>
	</head>
	<body>
		<h1>Esercizio 13</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 100);
		$b = random_int(1, 100);
		$c = random_int(1, 100);
		$d = random_int(1, 100);
		$e = random_int(1, 100);
		echo "<b>Valori numerici:</b> $a, $b, $c, $d, $e <br />";
		$p1 = random_int(1, 100);
		$p2 = random_int(1, 100);
		$p3 = random_int(1, 100);
		$p4 = random_int(1, 100);
		$p5 = random_int(1, 100);
		echo "<b>Pesi:</b> $p1, $p2, $p3, $p4, $p5 <br />";
		$mediaPesata = ($a * $p1 + $b * $p2 + $c * $p3 + $d * $p4 + $e * $p5) / ($p1 + $p2 + $p3 + $p4 + $p5);
		echo "<b>Media Pesata:</b> $mediaPesata";
		?>
		
	</body>
</html>