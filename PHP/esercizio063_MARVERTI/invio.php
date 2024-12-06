<!--   Realizzare una semplice applicazione PHP per l’acquisizione di dati personali. Mediante un form
HTML, sono richiesti all’utente nome, cognome e indirizzo e-mail; quest’ultimo, affinché si sia certi
della sua correttezza, dovrà essere richiesto due volte in due distinti campi. Validare sul lato server
l’e-mail dell’utente confrontando quindi i due indirizzi acquisiti, ignorando però gli eventuali punti
presenti prima della chiocciola (ad esempio, il controllo è positivo per “ing.mario.rossi@gmail.com”
e “ingmariorossi@gmail.com”). Memorizzare i dati acquisiti in un’apposita e unica struttura dati;
generare quindi in modo dinamico una tabella HTML riportante quanto acquisito 
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 62 </title>
	</head>

	<body>
		<h1>Esercizio 62 Invio Dati</h1>
		<h2>Marverti Diego</h2>
		<form action="ricezione.php" method="post">
			<label for="url">YOUTUBE URL SHORTNER</label>
			<input type="url" name="url" style="display: block; margin: 1em;"/>
			<input type="submit" value="Invio" />
		</form>
	</body>
</html>