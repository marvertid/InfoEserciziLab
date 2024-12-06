<!--  YouTube URL shortener. Realizzare un’applicazione che permetta di abbreviare gli URL dei video
di YouTube. L’utente dovrà fornire l’indirizzo del video, ottenendo un link funzionante.
https://www.youtube.com/watch?v=dQw4w9WgXcQ
https://youtu.be/dQw4w9WgXc  
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