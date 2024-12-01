<!--  L’università di Sheffield ha studiato alcune formule matematiche da utilizzare per addobbare un
albero di Natale in maniera perfetta:
a. Numero di palline: x Altezza albero (cm)
b. Lunghezza dei festoni (cm): x Altezza albero (cm)
c. Lunghezza delle luci (cm): π x Altezza albero (cm)
d. Altezza del puntale: Altezza albero (cm) / 10
Applicare tali formule in uno script PHP. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 17</title>
	</head>
	<body>
		<h1>Esercizio 17</h1>
		<h2>Marverti Diego</h2>
		<?php
		$altezzaAlbero = random_int(80, 200);
		$numeroPalline = sqrt(17)/20 * $altezzaAlbero;
		$lunghezzaFestoni = 13 * pi()/8 * $altezzaAlbero;
		$lunghezzaLuci = pi() * $altezzaAlbero;
		$altezzaPuntale = $altezzaAlbero / 10;

		echo "<b>Altezza albero</b>: $altezzaAlbero <br />";
		echo "<b>Numero Palline</b>: " . floor($numeroPalline) . "<br />";
		echo "<b> Lunghezza delle luci</b>:";
		printf(" %.2f <br />", $lunghezzaLuci);
		echo "<b> Altezza Puntale </b>: $altezzaPuntale";
		?>
	</body>
</html>