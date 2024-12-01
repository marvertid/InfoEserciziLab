<!-- Si scriva uno script che, dato un numero in virgola mobile, visualizzi parte intera e parte frazionaria,
separate. -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 3</title>
	</head>
	<body>
		<h1>Esercizio 3</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = 10.32;
		$parteFrazionaria = ($a - floor($a)); 

		echo "<b> Numero: </b> " . $a . "<br />";
		echo "<b> Parte frazionaria: </b>" . $parteFrazionaria . "<br />" ;
		printf("<b>Parte intera:</b> %.0f", $a);
		?>
		
	</body>
</html>