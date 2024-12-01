<!-- Scrivere uno script che calcoli con sufficiente precisione il pi greco (π) sfruttando la formula di
Nilakantha, riportata di seguito; da notare come la serie di somme e sottrazioni può andare avanti
all’infinito. Dopo aver individuato come continuare la formula, ricavare π con almeno 4 cifre
decimali esatte.
Utilizzare il valore di π ottenuto per calcolare area e circonferenza di un cerchio dato il raggio. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 12</title>
	</head>
	<body>
		<h1>Esercizio 12</h1>
		<h2>Marverti Diego</h2>
		<?php
		$piGrecoCalcolato = (1/(1*2*3) - 1/(2*3*5) + 1/(3*4*7) - 1/(4*5*9)  + 1/(5 * 6 * 11) - 1/(6 * 7 * 13) + 1/(7 * 8 * 15)) + 3;

		echo "π calcolato: " . $piGrecoCalcolato . "<br />";
		echo "π: " . pi() . "<br />";

		$raggio = random_int(1, 10);
		$circonferenza = 2*pi()*$raggio;
		$area = pow($raggio, 2)*pi();

		echo "<b>Raggio: </b>" . $raggio . "<br />";
		echo "<b>Circonferenza: </b>" . $circonferenza . "<br />";
		echo "<b>Area: </b>" . $area;
		?>
		
	</body>
</html>