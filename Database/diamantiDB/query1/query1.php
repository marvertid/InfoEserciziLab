<!-- Elenco con peso, caratura e prezzo complessivo dei solitari in oro bianco con diamante di grado
Excellent certificato in un dato anno da un istituto gemmologico con sede in una determinata città. -->

<?php
$server = "127.0.0.1";
$username = "root";
$pwd = "";
$database = "DiamantiDB";

$conn = new PDO("mysql:host=$server;dbname=$database", $username, $pwd);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$sql = "SELECT Anello.Peso AS 'Peso (Gr)', Diamante.Carati AS 'Carati (kr)', Anello.Costo AS 'Costo (EUR)'
			FROM Anello INNER JOIN Diamante ON Diamante.Id = Anello.CodDiamante INNER JOIN IstitutoGemmologico ON Diamante.CodIstituto = IstitutoGemmologico.Id
			WHERE Anello.Colore = 'Oro Bianco' AND Diamante.Brillantezza = 'Excellent' AND YEAR(DataRilascioCF) = :anno AND IstitutoGemmologico.Citta = :citta";
	
	$sth = $conn->prepare($sql);

	$anno = $_POST['anno'];
	$citta = $_POST['citta'];

	$sth->bindParam(":anno", $anno, PDO::PARAM_STR);
    $sth->bindParam(":citta", $citta, PDO::PARAM_INT);

	if()

	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>QUERY 1 MARVERTI DIEGO</title>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<style>
            table {
                border-collapse: collapse;
            }

            th, td {
                border: 2px solid #aaa;
                padding: 0.5rem;
            }
        </style>
	</head>
	<body>
		<h1>Query 1 Marverti Diego</h1>
		<?php 
			function genSortedTable($data) {
                if (!empty($data)) {
                echo "<table><tr>";

                foreach (array_keys($data[0]) as $field) {
                    echo "<th>" . $field . "</th>";
                }
                echo "</tr>";
                
                foreach ($data as $row) {
                    echo "<tr>";
                    foreach ($row as $field) {
                        echo "<td>" . $field . "</td>";
                    }
                    echo "</tr>";
                }
        
                echo "</table>";
            } else {
                echo "Nessuna riga restituita.";
            }
            }

            genSortedTable($result);
		?>
	</body>
</html>