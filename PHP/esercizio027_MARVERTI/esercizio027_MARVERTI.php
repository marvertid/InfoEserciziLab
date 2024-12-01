<!-- Fornita una data in formato numerico, comprendendo anche il giorno della settimana,
determinare quella successiva, senza considerare l’anno.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 27</title>
	</head>
	<body>
		<h1>Esercizio 27</h1>
		<h2>Marverti Diego</h2>
		<?php
		function getNextDay($day, $month) {

			if ($day == 30 or $day == 31 or $day == 28) {
				switch ($month) {
					case 1:
					case 3: 
					case 5:
					case 7:
					case 8:
					case 10:
					case 12:
						if ($day == 31) {
							$month = getNextMonth($month);
							$day = 1;
						} else  {
							$day++;
						}
					break;
					case 4:
					case 6:
					case 9:
					case 11:
						if ($day == 28) {
							$day++;
						} else {
							$month = getNextMonth($month);
							$day = 1;
						}
					break;
					case 2:
						$month = getNextMonth($month);
						$day = 1;
					break;
				} 
			} else
				$day++;

			return getRandomDay() . " $day / $month ";
		}

		function getNextMonth($month) {
			return $month == 12 ? 1 : ++$month;
		}

		function getRandomDay() {
			$stringDay = match(random_int(1, 7)) {
				1 => "Lunedi`",
				2 => "Martedi`",
				3 => "Mercoledi`",
				4 => "Giovedi`",
				5 => "Venerdi`",
				6 => "Sabato",
				7 => "Domenica"
			};

			return $stringDay;
		}
		$day = 28;
		$month = 2;
		echo "<b>Data inserita</b>: $day / $month <br />";
		echo "<b>Giorno successivo</b>: ", getNextDay($day, $month);
		?>
	</body>
</html>
