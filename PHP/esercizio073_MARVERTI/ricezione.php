<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 73 </title>
		<style>
			* {
				font-family: sans-serif;
			}
			table {
				border-collapse: collapse;
			}
			td {
                padding: 15px 30px;
                text-align: center;
                border: 1px solid #ddd;
            }
		</style>
	</head>

	<body>
		<h1>Esercizio 73 Ricezione Dati</h1>
		<h2>Marverti Diego</h2>
		<?php

		function generateTableOverData($data) {
			echo "<table>";
				echo "<tr>
						<td colspan=3><b>Dati Personali</b></td>
					  </tr>
					  <tr>
						<td><b>Et&agrave;</b></td>
						<td>". $data["ageInput"] .
					  "</tr>
					  <tr>
						<td><b>Sesso</b></td>
						<td>". $data["sesso"] .
					  "</tr>
					  <tr>
						<td colspan=3><b>Dati Scolastici</b></td>
					  </tr>
					  <tr>
						<td><b>Universit&agrave; di appartenenza</b></td>
						<td>". $data["uni"] .
					  "</tr>
					  <tr>
						<td><b>Voto esame di stato</b></td>
						<td>". $data["votoEsameStato"] .
					  "</tr>
					   <tr>
						<td colspan=3><b>Voto ultimi 5 esami</b></td>
					  </tr>";
					  for($i = 0; $i < 5; $i++) {
					  	echo "<tr>
							<td><b>Voto Esame " . $i + 1 . ": </td>
							<td>" , isset($data["lodeEsame"][$i]) ? $data["votoEsame"][$i] . " e lode" : $data["votoEsame"][$i]; 
							echo "</td>
					  	</tr>";
					  }
			echo "</table>";
		}
		
		if($_SERVER["REQUEST_METHOD"] === "POST") {
			generateTableOverData($_POST);
		}
		?>
	</body>
</html>