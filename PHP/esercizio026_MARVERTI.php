<!-- Scrivere uno script PHP che generi casualmente una data (per es., 1° marzo 2024) compresa fra il
2001 e il 2099. Si tenga presente che:
 i mesi di 31 giorni sono: gennaio, marzo, maggio, luglio, agosto, ottobre e dicembre;
 febbraio ha 29 giorni negli anni bisestili;
 &deg; è l’entità HTML per il carattere °.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 26</title>
	</head>
	<body>
		<h1>Esercizio 26</h1>
		<h2>Marverti Diego</h2>
		<?php
		function isLeap($year) {
			if ($year % 100 != 0 and $year % 4 == 0)
				return true;
			else if ($year % 100 == 0 and $year % 400 == 0)
				return true;
			return false;
		}

		function random_date($yearMin, $yearMax) {
			$year = random_int($yearMin, $yearMax);
			$month = random_int(1, 12);
			if ($month == 2 and isLeap($year)) 
				$day = random_int(1, 29);
			else {
				$day = match($month) {
					1, 3, 5, 7, 8, 10, 12 => random_int(1, 31),
					4, 6, 9, 11 => random_int(1, 30),
					2 => random_int(1, 28)
				};
			}
			$monthName = match($month) {
				1 => "Gennaio",
				2 => "Febbraio",
				3 => "Marzo",
				4 => "Aprile",
				5 => "Maggio",
				6 => "Giugno",
				7 => "Luglio",
				8 => "Agosto",
				9 => "Settembre",
				10 => "Ottobre",
				11 => "Novembre",
				12 => "Dicembre"
			};

			return "$day&deg; $monthName $year";
		}
		const YEAR_MAX = 2099;
		const YEAR_MIN = 2001;

		echo "<b>Data casuale</b>: " . random_date(YEAR_MIN, YEAR_MAX);
		?>
	</body>
</html>
