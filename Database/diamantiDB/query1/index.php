<!-- Elenco con peso, caratura e prezzo complessivo dei solitari in oro bianco con diamante di grado
Excellent certificato in un dato anno da un istituto gemmologico con sede in una determinata città. -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>FORM QUERY 1 MARVERTI DIEGO</title>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<style>
			label {
				display: block;
				margin: 0.2rem;
			}
		</style>
	</head>
	<body>
		<h1>RICHIESTA DATI MARVERTI DIEGO</h1>
		<form method="POST" action="query1.php">
			<fieldset>
				<legend>Richiesta dati anello</legend>
				<label for="anno">Inserire anno: </label>
				<input type="number" name="anno" required="required" min="1998" max="<?php echo date("Y") ?>"/>
				<label for="citta">Inserire città: </label>
				<input type="text" name="citta" required="required" placeholder="Roma.." />
				<input type="submit" value="Submit" />
			</fieldset>
		</form>
	</body>
</html>