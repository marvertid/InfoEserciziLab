<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "RecensioniCulinarie";

$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "SELECT Recensione.Titolo, Recensione.Testo, Recensione.DataP, Recensione.VotoL, Recensione.VotoS, Recensione.VotoM, Recensione.VotoC
    FROM Recensione 
    INNER JOIN Critico ON Recensione.CodCritico = Critico.Id 
    INNER JOIN Ristorante ON Recensione.CodRistorante = Ristorante.Id 
    WHERE Critico.Nome = :nome 
    AND Critico.Cognome = :cognome 
    AND Recensione.DataP > :data 
    AND Ristorante.Animali = TRUE";
       
    $sth = $conn->prepare($sql);

    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $data = $_POST["data"];

    $sth->bindParam(":nome", $nome, PDO::PARAM_STR);
    $sth->bindParam(":cognome", $cognome, PDO::PARAM_STR);
    $sth->bindParam(":data", $data, PDO::PARAM_STR);


    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Risultato Query</title>
        <meta charset="UTF-8" />
        <meta name="author" content="MARVERTI DIEGO 5AI">
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
        <h1>Risultato Query</h1>
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
<html>
<?php
    } else {
        echo "Errore!";
    }
?>