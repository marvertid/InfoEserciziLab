<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 1</title>
	</head>
	<body>
		<h1>Esercizio 1</h1>
		<h2>Marverti Diego</h2>
		
		<p>Scambio di due variabili:</p>
		<?php
		$a = 5;
		$b = 6;
		echo "<p><b>a</b> = $a <br />", "<p><b>b</b> = $b <br />";  
		echo "<hr />";
		$tmp = $a;
		$a = $b;
		$b = $tmp;

		echo "<p><b>a</b> = $a <br />", "<p><b>b</b> = $b <br />"; 
		?>
	</body>
</html>