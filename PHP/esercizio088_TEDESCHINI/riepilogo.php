<?php
session_start();
if (!empty($_SESSION["giochi"])) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="author" content="Tedeschini Stefano 5AI" />
            <style>
                table{
                    border-collapse: collapse;
                }

                th, td{
                    padding: 5px;
                    border: 1px solid black;
                }
            </style>
        </head>
        <body>
            <table>
                <tr>
                    <th>Nome gioco</th>
                    <th>Punteggio</th>
                    <th>Data</th>
                    <th>Genere</th>
                    <th>Modding community</th>
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
}
?>