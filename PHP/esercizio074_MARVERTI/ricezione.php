<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title> Esercizio 74 </title>
		<style>
			* {
				font-family: sans-serif;
			}
			table {
				border-collapse: collapse;
			}
			td, th {
                padding: 15px 30px;
                text-align: center;
                border: 1px solid #ddd;
            }
		</style>
	</head>

	<body>
		<h1>Esercizio 74 Ricezione Dati</h1>
		<h2>Marverti Diego</h2>
		<?php
		define("NULLA", "NON HAI INSERITO NULLA!");

		function genTable($data) {
			echo "<table>";
			foreach ($data as $key => $value) {
				echo "<tr>
						<th>$key</th>
						<td>$value</td>
					 </tr>";
			}
			echo "</table>";
		}

		function formatDateTime($dateTime): string {
			return str_replace("T", " ", $dateTime);
		}

		function sanitizeData($rawdata): array {
			$data["Data e Ora"] = !empty($rawdata["dateTime"]) ? $rawdata["dateTime"] : NULLA;
			$data["Regione"] = !empty($rawdata["regioni"]) ? $rawdata["regioni"] : NULLA;
			$data["Provincia"] = !empty($rawdata["provincia"]) ? $rawdata["provincia"] : NULLA;
			$data["Comune"] = !empty($rawdata["comune"]) ? $rawdata["comune"] : NULLA;
			$data["Scala Mercalli"] = !empty($rawdata["mercalli"]) ? $rawdata["mercalli"] : NULLA;
			$data["Piano di rilevazione"] = !empty($rawdata["pianoSelect"]) ? $rawdata["pianoSelect"] : NULLA;
			$data["Numero di piani"] = !empty($rawdata["numPiani"]) ? $rawdata["numPiani"] : NULLA;
			return $data;
		}

		if($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = sanitizeData($_POST);
			genTable($data);
		}
		?>
	</body>
</html>