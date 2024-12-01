<!-- Generare 10 numeri interi pseudo-casuali senza ripetizione compresi fra 1 e 10.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 44</title>
	</head>
	<body>
		<h1>Esercizio 44</h1>
		<h2>Marverti Diego</h2>
		<?php
			function randomUnique() {
				$arr = array();
				for ($i = 0; $i < 10; $i++) {
					do {
						$num = random_int(1, 10);
					} while(isset($arr[$num]));

					$arr[$num] = $num;
				}

				return $arr;
			}
			$arr = randomUnique();
			echo implode(" - ", $arr)
		?>
	</body>
</html>