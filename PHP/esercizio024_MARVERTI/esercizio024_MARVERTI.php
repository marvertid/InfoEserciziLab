<!-- Generare casualmente una sequenza di 1000 nucleotidi (rappresentati dalle lettere A, C, G e T) di
un filamento di DNA.-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 24</title>
	</head>
	<body>
		<h1>Esercizio 24</h1>
		<h2>Marverti Diego</h2>
		<?php
		$string = "";
		for ($i = 0; $i < 1000; $i++) {
			$string .= match(random_int(1, 4)) {
				1 => "A",
				2 => "C",
				3 => "G",
				4 => "T"
			};			
		}
		echo "Sequenza nucleotidi: $string";

		?>
	</body>
</html>