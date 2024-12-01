<!-- Un numero naturale viene definito ondulante se è costituito esattamente da due sole cifre
alternate, come, ad esempio, 353 o 585858. Scrivere uno script che determini se un dato
numero naturale (con almeno 5 cifre) è ondulante.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 45</title>
	</head>
	<body>
		<h1>Esercizio 45</h1>
		<h2>Marverti Diego</h2>
		<?php
			function isWavy($num) : bool {
				$arr = str_split($num, 2);
				return (max($arr) == min($arr));
			}
			$num = 161616161;
			echo "<b>Numero</b>: $num <br />";
			echo "<b>E` ondulante</b>: " , isWavy($num) ? "Si" : "No";
		?>
	</body>
</html>