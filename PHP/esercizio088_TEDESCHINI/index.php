<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Tedeschini Stefano 5AI" />
		<title>Esercizio 88BIS</title>
	</head>
	<body>
		<h1>Esercizio 88BIS</h1>
		<p>
			Si vuole realizzare un servizio web per la gestione della raccolta dei punteggi realizzati in videogiochi
			da parte di un utente. Il servizio prevede le seguenti pagine:
			<ol type="a">
				<li>
					un form in cui l'utente possa inserire il nome del videogioco e il suo punteggio numerico. Il
					form permette l'inserimento di un punteggio per volta e l'inserimento di più punteggi
					avviene inviando più volte il form in una stessa sessione. 
				</li>
				<li>
					una pagina di raccolta dei punteggi dei videogiochi che memorizzi sul server i punteggi
					inseriti con il form del punto a. Si assume che, nel caso in cui l'utente invii più di una volta
					un punteggio per lo stesso videogioco nella stessa sessione, il punteggio memorizzato sia
					pari al massimo dei valori inseriti.
				</li>
				<li>
					una pagina di riepilogo che stampi la lista dei videogiochi con i relativi punteggi.
				</li>
                <li>
                    Varianti es. 88-89-90: ripetere gli esercizi, richiedendo all'utente contemporaneamente più di 4 dati per singolo videgame, 
                    film e libro, da memorizzare sempre in un un'unica variabile di sessione (un array multidimensionale).
                </li>
			</ol>
		</p>
		<form action="raccolta.php" method="POST">
			<fieldset>
				<label>Inserisci il nome del gioco:  <input type="text" name="gioco" required="required" /></label> <br />
				<label>Inserisci il genere del gioco:  <input type="text" name="genere" required="required" /></label> <br />
				<label>Inserisci il punteggio:  <input type="number" name="punteggio" required="required" min="0"/></label> <br />
                <label>Inserisci la data:  <input type="date" max="<?php echo date("Y-m-d") ?>" name="data"  required="required" /></label> <br />
                <input type="radio" name="modding" value="No" selected="selected" /> Non esiste una modding community <br />
                <input type="radio" name="modding" value="Si" /> Esiste una modding community <br />
			</fieldset>
			<input type="submit" value="Invio" />
		</form>
		<a href="riepilogo.php">Vai al riepilogo</a>
	</body>
</html>