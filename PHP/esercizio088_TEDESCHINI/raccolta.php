<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = 0;
    if (isset($_POST["gioco"])) {
        $nome = $_POST["gioco"];
    }

    $punteggio = 0;
    if (isset($_POST["punteggio"])) {
        $punteggio = $_POST["punteggio"];
    }

    $data = 0;
    if (isset($_POST["data"])) {
        $data = $_POST["data"];
    }

    $genere = 0;
    if (isset($_POST["genere"])) {
        $genere = $_POST["genere"];
    }

    $modding = 0;
    if (isset($_POST["modding"])) {
        $modding = $_POST["modding"];
    }

    if (!empty($_SESSION["giochi"][$nome])) {
        if ($_SESSION["giochi"][$nome]["punti"] <= $punteggio) {
            $_SESSION["giochi"][$nome]["punti"] = $punteggio;
            $_SESSION["giochi"][$nome]["data"] = $data;
        }
    } else {
        $_SESSION["giochi"][$nome] = [
            "punti" => $punteggio,
            "data" => $data,
            "genere" => $genere,
            "modding" => $modding
        ];
    }
}
header("Location: index.php");
?>