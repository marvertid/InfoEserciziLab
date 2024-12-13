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
					<p>Universit&agrave; di appartenenza: </p>
					<label class="inline">UniBo<input type="radio" value="unibo" name="uni" required="required"/><br />
                    <label class="inline">UniPr<input type="radio" value="unipr" name="uni" required="required"/></label><br />
					<label class="inline">UniMore<input type="radio" value="unimore" name="uni" required="required"/></label><br />
					<label class="inline">UniFe<input type="radio" value="unipr" name="uni" required="required"/></label>
				</p>
				<p>
					<label >Voto Esame di Stato: </label>
					<input type="number" min="60" max="100" step="1" name="votoEsameStato" />
					<label class="inline">Lode: <input type="checkbox" name="lode" /></label>
				</p>
				<p>
					<p>Voto Ultimi 5 Esami: </p>
					<hr />
					<label class="inline" >Voto esame 1: <input type="number" min="0" max="30" name="votoEsame[]" required="required"/></label>
					<label class="inline" >Crediti associati: <input type="number" min="1" max="10" name="creditoEsame[]" required="required"/></label><br />
					<label class="inline" >Lode: <input type="checkbox" name="lodeEsame[0]"/><br /></label>
					<hr />
					<label class="inline" >Voto esame 2: <input type="number" min="0" max="30" name="votoEsame[]" required="required"/></label>
					<label class="inline" >Crediti associati: <input type="number" min="1" max="10" name="creditoEsame[]" required="required"/></label><br />
					<label class="inline" >Lode: <input type="checkbox" name="lodeEsame[1]" /><br /></label>
					<hr />
					<label class="inline" >Voto esame 3: <input type="number" min="0" max="30" name="votoEsame[]" required="required"/></label>
					<label class="inline" >Crediti associati: <input type="number" min="1" max="10" name="creditoEsame[]" required="required"/></label><br />
					<label class="inline" >Lode: <input type="checkbox" name="lodeEsame[2]" /><br /></label>
					<hr />
					<label class="inline" >Voto esame 4: <input type="number" min="0" max="30" name="votoEsame[]" required="required"/></label>
					<label class="inline" >Crediti associati: <input type="number" min="1" max="10" name="creditoEsame[]" required="required"/></label><br />
					<label class="inline" >Lode: <input type="checkbox" name="lodeEsame[3]"  /><br /></label>
					<hr />
					<label class="inline" >Voto esame 5: <input type="number" min="0" max="30" name="votoEsame[]" required="required"/></label>
					<label class="inline" >Crediti associati: <input type="number" min="1" max="10" name="creditoEsame[]" required="required"/></label><br />
					<label class="inline" >Lode: <input type="checkbox" name="lodeEsame[4]" /><br /></label>
					<hr />
				</p>
			</fieldset>
			<fieldset>
				<legend>Trattamento dati personali</legend>
				<input type="checkbox" name="trattamentoDati" id="trattamentoDati" required="required"/><label for="trattamentoDati" class="inline"> Consenso al trattamento dei dati personali al fine di creare una reportistica</label>
			</fieldset>
			<input type="submit" value="Invio" />
		</form>
	</body>
</html>