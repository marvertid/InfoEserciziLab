<!--Si scriva uno script che, dati cinque valori interi, visualizzi la loro media armonica, ovvero il reciproco della media aritmetica dei reciproci-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 15</title>
	</head>
	<body>
		<h1>Esercizio 15</h1>
		<h2>Marverti Diego</h2>
		<?php
		$a = random_int(1, 99);
		$b = random_int(1, 99);
		$c = random_int(1, 99);
		$d = random_int(1, 99);
		$e = random_int(1, 99);
		$mediaArm = 5/((1/$a + 1/$b + 1/$c + 1/$d + 1/$e));
		echo "<b>Numeri</b>: $a, $b, $c, $d, $e <br />";
		echo "<b>Media Armonica</b>: $mediaArm";
		?>

		
	</body>
</html>