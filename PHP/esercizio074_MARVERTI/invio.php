<!--  Un sito web di geofisica intende fornire agli utenti la possibilità di inviare segnalazioni, per mezzo di
un modulo, sugli effetti di eventi sismici rilevanti. La società che gestisce il sito intende quindi
commissionare la progettazione di un’applicazione che registri in un database i dati inviati in forma
anonima dai visitatori. Saranno richiesti i seguenti dati:
 Data e ora approssimativi dell’evento.
 Comune, provincia e regione.
 Valutazione dell’intensità (secondo la scala Mercalli).
 Piano nel quale si è avvertita la scossa (interrato, terra, 1 ÷ 10, superiore a 10).
 Numero totale di piani dell’edificio.
La scala Mercalli è una scala di valutazione dell’intensità di un terremoto eseguita osservando gli
effetti che esso produce sulla superficie terrestre su persone, cose e manufatti. I valori di questa
scala sono scritti con numeri romani e vanno da I a XII:
Grado Descrizione Grado Descrizione
I impercettibile VII molto forte
II molto leggera VIII rovinosa
III leggera IX distruttiva
IV moderata X completamente distruttiva
V piuttosto forte XI catastrofica
VI forte XII apocalittica
Si realizzi un form HTML per l’invio dei dati di un’unica rilevazione a uno script PHP, affinché essi
siano memorizzati in un’apposita e unica struttura dati. Generare in modo dinamico una tabella
HTML riportante tutti i dati acquisiti. -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="AUTHOR" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 74 </title>
		<style>
			label {
				display: block;
				margin-bottom: 0.4em;
			}
			.inline {
				display: inline;
			}
			fieldset {
				margin-bottom: 0.3em;
			}
			form {
				width: 45em; 
			}
		</style>
	</head>
	<body>
		<?php
		$arrayReg = ["Emilia Romagna", "Abruzzo", "Piemonte", "Lombardia", "Valle D'Aosta", "Toscana", "Liguria", "Lazio"];
		$arrayProv = ["Modena", "Bologna", "Padova"];
		$arrayCom = ["Soliera", "Carpi", "Reggiolo", "Mirandola", "Concordia SS"];
		$arrayMercalli = ["I - Impercettibile", "II - Molto leggera", "III - Leggera", "IV - Moderata", "V - Piuttosto forte", "VI - Forte", "VII - Molto forte", "VIII - Rovinosa", "IX - Distruttiva", "X - Completamente distruttiva", "XI - Catastrofica", "XII - Apocalittica"];
		?>
		<h1>Esercizio 74 Invio Dati</h1>
		<h2>Marverti Diego</h2>
		<h3>Raccolta Dati</h3>
		<form action="ricezione.php" method="post">
			<fieldset>
				<legend>Raccolta Dati</legend>
				<p><label>Data e ora Evento: <input type="datetime-local" name="dateTime" required="required"/></label></p>
				<p>
					<label for="comProvReg"> Regione, Provincia, Comune</label>
					<select name="regioni" id="comProvReg" required="required">
						<?php
							foreach ($arrayReg as $reg) {
								echo "<option>$reg</option>";
							}
						?>
					</select>
					<select name="provincia" id="comProvReg" required="required">
						<?php
							foreach ($arrayProv as $prov) {
								echo "<option>$prov</option>";
							}
						?>
					</select>
					<select name="comune" id="comProvReg" required="required">
						<?php
							foreach ($arrayCom as $com) {
								echo "<option>$com</option>";
							}
						?>
					</select>
				</p>
				<p><label for="mercalli">Valutazione intensit&agrave;</label>
					<select name="mercalli" id="mercalli" required="required">
						<?php
							foreach ($arrayMercalli as $value) {
								echo "<option>$value</option>";
							}
						?>
				</select></p>
				<p><label>Piano nel quale si &egrave; avvertita la scossa <select name="pianoSelect" required="required">
					<option>Interrato</option>
					<option>Piano terra</option>
					<option>1 ÷ 10</option>
					<option>Superiore a 10</option>
				</select></label>
				</p>
				<p><label>Numero totale di piani <input type="number" name="numPiani" max="200" min="1" /></label></p>
			</fieldset>
			<input type="submit" value="Invio" />
		</form>
	</body>
</html>