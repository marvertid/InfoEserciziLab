<!--  Una società di statistica intende realizzare un’applicazione Web per la raccolta di alcuni dati
personali di studenti universitari emiliani del primo anno. Sono richiesti:
• l’età;
• il sesso;
• l’università emiliana di appartenenza:
o Bologna;
o Parma;
o Modena - Reggio Emilia;
o Ferrara.
• il voto ottenuto all’esame di Stato (da 60 a 100; considerare anche l’eventuale lode);
• i voti degli ultimi 5 esami sostenuti (18 ÷ 30, con eventuale lode), con i relativi crediti (1 ÷ 10);
• autorizzazione esplicita al trattamento dei dati personali.
Visualizzare nel modo che si ritiene più consono i dati acquisiti e validati -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="AUTHOR" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 73 </title>
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
		<h1>Esercizio 73 Invio Dati</h1>
		<h2>Marverti Diego</h2>
		<h3>Raccolta Dati</h3>
		<form action="ricezione.php" method="post">
			<fieldset>
				<legend>Dati Personali</legend>
				<p>
					<label for="ageInput">Et&agrave;: </label>
					<input type="number" name="ageInput" min="0" max="100" step="1" required="required"/>
				</p>				
				<p>
					<label for="m f">Sesso: </label>
                    <label for="m" class="inline">Maschio</label> <input type="radio" value="M" name="sesso" required="required"/>
                    <label for="f" class="inline">Femmina</label> <input type="radio" value="F" name="sesso" required="required"/>
				</p>			
			</fieldset>
			<fieldset>
				<legend>Dati Scolastici</legend>
				<p>
					<label for="unibolo unipr unimore unife">Universit&agrave; di appartenenza: </label>
					<label for="unibo" class="inline">UniBo</label><input type="radio" value="unibo" name="uni" required="required"/><br />
                    <label for="unipr" class="inline">UniPr</label><input type="radio" value="unipr" name="uni" required="required"/><br />
					<label for="unimore" class="inline">UniMore</label><input type="radio" value="unimore" name="uni" required="required"/><br />
					<label for="unife" class="inline">UniFe</label><input type="radio" value="unipr" name="uni" required="required"/>
				</p>
				<p>
					<label for="votoEsameStato" >Voto Esame di Stato:</label>
					<input type="number" min="60" max="100" step="1" name="votoEsameStato" />
					<label class="inline">Lode: </label><input type="checkbox" name="lode" />
				</p>
				<p>
					<label>Voto Ultimi 5 Esami: </label>
					<hr />
					<label class="inline" for="votoEsame[]">Voto esame 1: </label><input type="number" min="0" max="30" name="votoEsame[]" required="required"/>
					<label class="inline" for="creditoEsame[]">Crediti associati: </label><input type="number" min="1" max="10" name="creditoEsame[]" required="required"/><br />
					<label class="inline" for="lodeEsame[]">Lode: </label><input type="checkbox" name="lode" name="lodeEsame[]"/><br />
					<hr />
					<label class="inline" for="votoEsame[]">Voto esame 2: </label><input type="number" min="0" max="30" name="votoEsame[]" required="required"/>
					<label class="inline" for="creditoEsame[]">Crediti associati: </label><input type="number" min="1" max="10" name="creditoEsame[]" required="required"/><br />
					<label class="inline" for="lodeEsame[]">Lode: </label><input type="checkbox" name="lode" name="lodeEsame[]" /><br />
					<hr />
					<label class="inline" for="votoEsame[]">Voto esame 3: </label><input type="number" min="0" max="30" name="votoEsame[]" required="required"/>
					<label class="inline" for="creditoEsame[]">Crediti associati: </label><input type="number" min="1" max="10" name="creditoEsame[]" required="required"/><br />
					<label class="inline" for="lodeEsame[]">Lode: </label><input type="checkbox" name="lode" name="lodeEsame[]" /><br />
					<hr />
					<label class="inline" for="votoEsame[]">Voto esame 4: </label><input type="number" min="0" max="30" name="votoEsame[]" required="required"/>
					<label class="inline" for="creditoEsame[]">Crediti associati: </label><input type="number" min="1" max="10" name="creditoEsame[]" required="required"/><br />
					<label class="inline" for="lodeEsame[]">Lode: </label><input type="checkbox" name="lode" name="lodeEsame[] " /><br />
					<hr />
					<label class="inline" for="votoEsame[]">Voto esame 5: </label><input type="number" min="0" max="30" name="votoEsame[]" required="required"/>
					<label class="inline" for="creditoEsame[]">Crediti associati: </label><input type="number" min="1" max="10" name="creditoEsame[]" required="required"/><br />
					<label class="inline" for="lodeEsame[]">Lode: </label><input type="checkbox" name="lode" name="lodeEsame[]" /><br />
					<hr />
				</p>
			</fieldset>
			<fieldset>
				<legend>Trattamento dati personali</legend>
				<input type="checkbox" name="trattamentoDati" required="required"/><label for="trattamentoDati" class="inline"> Consenso al trattamento dei dati personali al fine di creare una reportistica</label>
			</fieldset>
			<input type="submit" value="Invio" />
		</form>
	</body>
</html>