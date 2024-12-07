<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 62 </title>
	</head>

	<body>
		<h1>Esercizio 62 Ricezione Dati</h1>
		<h2>Marverti Diego</h2>
		<?php

		function isValidYtUrl($url): bool {
			define("YTURL", "https://www.youtube.com/watch");
			return str_starts_with($url, YTURL);
		}

		function YtUrlShortner($url): string {
			$vidId = substr($url, 32);

			return "https://youtu.be/" . $vidId;
		}

		if($_SERVER["REQUEST_METHOD"] === "POST") {
			if(empty($_POST["url"])) {
				echo "<p><span style=color:red>Non hai inserito nessun valore!</span></p>";
			} else {
				if (isValidYtUrl($_POST["url"])) {
					$short = YtUrlShortner($_POST["url"]);
					echo "<p> <b>Indirizzo iniziale</b>: " . $_POST["url"] . "</p>";
					echo "<p> <b>Indirizzo shortened</b>: $short </p>";
				} else {
					echo "test";
				}
			}
		}
		?>
	</body>
</html>