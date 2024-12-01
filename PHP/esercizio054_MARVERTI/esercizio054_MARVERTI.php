<!-- Codice fiscale. Sia dato un codice fiscale; ricavare da esso la data di nascita della persona. Nella
generazione del codice fiscale:
 Anno di nascita (due cifre, settimo e ottavo carattere del codice): si prendono le ultime
due cifre dell’anno di nascita; a parità degli altri dati, i nati a distanza di un secolo hanno
lo stesso codice.
 Mese di nascita (una lettera, nono carattere): a ogni mese dell’anno viene associata una
lettera in base a questa tabella:
 Giorno di nascita e sesso (due cifre, decimo e undicesimo carattere): si prendono le due
cifre del giorno di nascita (se è compreso tra 1 e 9 si pone uno zero come prima cifra);
per i soggetti di sesso femminile, a tale cifra va sommato il numero 40. In questo modo
il campo contiene la doppia informazione giorno di nascita e sesso: i maschi avranno il
giorno con cifra da 01 a 31, mentre le donne da 41 a 71
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 54</title>
	</head>
	<body>
		<h1>Esercizio 54</h1>
		<h2>Marverti Diego</h2>
		<?php
			define("GGSETTIMANA", ["Lunedi", "Martedi", "Mercoledi", "Giovedi", "Venerdi", "Sabato", "Domenica"]);
			define("DDWEEK", ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]);

			define("MESI", ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novebre", "Dicembre"]);
			define("MONTH", ["January", "February", "March", "April", "May", "June", "July", "Agoust", "September", "October", "November", "Dicember"]);
			function translateDateToIT($string): string {
				$arrayString = explode(" ", $string);
				str_replace(DDWEEK, GGSETTIMANA, $arrayString[0]);
				str_replace(MONTH, MESI, $arrayString[3]);

				return implode(" ", $arrayString);
			}

			echo date("l j F Y h:i:s A") . "<br />" ;
			$stringDate = date("l j F Y h:i:s A");
			echo translateDateToIT($stringDate);

		?>
	</body>
</html>