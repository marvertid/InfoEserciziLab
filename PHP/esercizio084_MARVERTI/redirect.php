<?php

setcookie("nomeUtente", $_POST["nome"], time() + 60 * 5, "/");
setcookie("cognomeUtente", $_POST["cognome"], time() + 60 * 5, "/");
header("Location: hello.php");
?>