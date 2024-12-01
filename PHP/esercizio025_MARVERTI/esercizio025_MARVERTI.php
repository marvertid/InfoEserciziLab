<!-- Scrivere uno script in grado di stabilire se un dato anno del calendario gregoriano (dal 1582) è
bisestile. Sono bisestili:
 gli anni non secolari il cui numero è divisibile per 4;
 gli anni secolari il cui numero è divisibile per 400.
Per fare qualche esempio, il 1896 e il 1996 sono stati entrambi bisestili (non secolari divisibili per
4), il 1800 e il 1900 non lo sono stati (secolari non divisibili per 400), mentre il 1600 e il 2000 lo
sono stati (secolari divisibili per 400).-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 25</title>
	</head>
	<body>
		<h1>Esercizio 25</h1>
		<h2>Marverti Diego</h2>
		<?php
		function isLeap($anno) {
			if ($anno % 100 != 0 and $anno % 4 == 0)
				return true;
			else if ($anno % 100 == 0 and $anno % 400 == 0)
				return true;
			return false;
		}

		$anno = random_int(1582, 3000);
		echo "il $anno e`: ", isLeap($anno) ? "Bisestile" : "Non bisestile";
		?>
	</body>
</html>
