<?php
$server = "127.0.0.1"
$username = "root"
$password = ""
$database = "RecensioniCulinarie"

$conn = new PDO("mysql:host=$server;dbname$database, $username, $password");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "SELECT Recensione.* FROM Recensione INNER JOIN Critico ON Recensione.CodCritico = Critico.Id INNER JOIN Ristorante ON Recensione.CodRistorante = Ristorante.Id WHERE Critico.Nome = :nome AND Critico.Cognome = :cognome AND Recensione.DataP > :data AND Ristorante.Animali = TRUE";
       
    $sth = $conn->prepare($sql);

    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $data = $_POST["data"];

    $sth->bindParam(":nome", $nome, PDO::PARAM_INT);
    $sth->bindParam(":cognome", $cognome, PDO::PARAM_INT);
    $sth->bindParam(":data", $data, PDO::PARAM_INT);


    $sth->execute();
    $result = $sth->fetch_all(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Risultato Query</title>
        <meta charset="UTF-8" />
        <meta name="author" content="MARVERTI DIEGO 5AI">
    </head>
    <body>
        <h1>Risultato Query</h1>
        <?php
            function genSortedTable($data) {
                echo "<table border=1>";
                echo "<tr>
                        <th>TARGA</th>
                        <th>MARCA</th>
                        <th>ANNO IMMATRICOLAZIONE</th>
                      </tr>";
                foreach ($data as $key => $value) {
                    echo "<tr style=text-align:center >
                            <td> $key </td> 
                            <td> $value[0] </td>
                            <td> $value[1] </td>
                          </tr>";
                }
                echo "</table>";
            }
        ?>
    </body>