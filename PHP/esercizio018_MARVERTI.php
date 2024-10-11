<!-- Generare casualmente un voto compreso fra 1 e 10 (includere i “mezzi voti”) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 18</title>
	</head>
	<body>
		<h1>Esercizio 18</h1>
		<h2>Marverti Diego</h2>
		<?php
		$voto = random_int(2, 20) / 2;
		echo "Voto: $voto";
		?>
	</body>
</html>