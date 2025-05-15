<?php
session_start();

if (!empty($_SESSION["giochi"])){
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>RISULTATI</title>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<style>
			table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
				padding: 0.5rem;
			}
		</style>
	</head>
	<body>
		<h1>RIEPILOGO DATI</h1>
		<table>
			<tr>
				<th>NOME</th>
				<th>PUNTEGGIO GRAFICA</th>
				<th>PUNTEGGIO STORIA</th>
				<th>PUNTEGGIO GAME DESIGN</th>
				<th>DATA PUBBLICAZIONE</th>
			</tr>
                <?php
                foreach (array_keys($_SESSION["giochi"]) as $key){
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    foreach ($_SESSION["giochi"][$key] as $valore){
                        echo "<td>" . $valore . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
            <a href="index.php">Ritorna all'inserimento</a>
        </body>
    </html>
    <?php
} else {
	echo " ziopporc";
}
?>
