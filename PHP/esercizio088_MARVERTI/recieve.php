<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === "POST") {

	$nome = "";
	if (isset($_POST["nome"]))
		$nome = $_POST["nome"];

	$punteggioG = 0;
	if (isset($_POST["punteggioG"]))
		$punteggioG = $_POST['punteggioG'];

	$punteggioH = 0;
	if (isset($_POST["punteggioH"]))
		$punteggioH = $_POST['punteggioH'];

	$punteggioGD = 0;
	if (isset($_POST["punteggioGD"])) 
		$punteggioGD = $_POST["punteggioGD"];

	$dataPubblicazione = "";
	if (isset($_POST["dataPubblicazione"])) 
		$dataPubblicazione = $_POST["dataPubblicazione"];

	if (!empty($_SESSION['giochi'][$nome])) {
		if ($_SESSION['giochi'][$nome]["punteggioG"] < $punteggioG | $_SESSION['giochi'][$nome]["punteggioH"] < $punteggioH | $_SESSION['giochi'][$nome]["punteggioGD"] < $punteggioGD) {
			$_SESSION['giochi'][$nome] = [
				"punteggioGD" => $punteggioGD,
				"punteggioG" => $punteggioG,
				"punteggioH" => $punteggioH,
				"dataPubblicazione" => $dataPubblicazione
			];
		}
	} else {
		$_SESSION["giochi"][$nome] = [
			"punteggioGD" => $punteggioGD,
			"punteggioG" => $punteggioG,
			"punteggioH" => $punteggioH,
			"dataPubblicazione" => $dataPubblicazione 
		];
	} 
}
header("Location: index.php");

?>