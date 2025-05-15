<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ESERCIZIO 88 MARVERTI DIEGO</title>
		<meta charset="utf-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
	</head>
	<body>
		<h1>ESERCIZIO 88 MARVERTI DIEGO</h1>
		<form action="recieve.php" method="post">
			<fieldset>
				<legend>Raccolta Dati</legend>
				<p><label>Nome: <input type="text" name="nome"/></label></p>
				<p><label>Punteggio Grafica: <input type="number" min=0 max=10 step="0.5" name="punteggioG"/></label></p>
				<p><label>Punteggio Storia: <input type="number" min="0" max="10" step="0.5" name="punteggioH"/></label></p>
				<p><label>Punteggio Game Design: <input type="number" min="0" max="10" step="0.5" name="punteggioGD"/></label></p>
				<p><label>Data Pubblicazione: <input type="date" max="<?php echo date("Y-m-d"); ?>" name="dataPubblicazione"/></label></p>
			</fieldset>
			<input type="submit" />
			<input type="reset" />
		</form>
		<a href="deleteSession.php" style="float: right;">Cancella Sessione!</a>
		<a href="result.php">Visualizza riepilogo</a>
	</body>
</html>