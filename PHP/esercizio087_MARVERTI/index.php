<?php
if (isset($_COOKIE['arrayNum'])) {
	$arrayNum = $_COOKIE['arrayNum'];
	$count = count($_COOKIE['arrayNum']);
}else 
	$arrayNum = array();
	$count = 0;
if (isset($_POST['numero'])) {
	array_push($arrayNum, (int) $_POST['numero']);
	setcookie("arrayNum[$count]", $_POST['numero'], time() + 60 * 20, "/");
	var_dump($arrayNum);
	$max = max($arrayNum);
	$min = min($arrayNum);
	$tot = array_sum($arrayNum);
	$nVal = count($arrayNum);
	if ($count == 0) 
		$media = $tot;
	else 
		$media = $tot / $count ;
}


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>MARVERTI DIEGO 5AI</title>
		<meta charset="utf-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<style>
			table {
				margin-top: 2rem;	
				border-collapse: collapse;
			}
			th, td  {
				border: 1px solid black;
				padding: 0.5rem;
			}
		</style>
	</head>
	<body>
		<h1>ESERCIZIO 87 MARVERTI DIEGO</h1>
		<form action="index.php" method="post">
			<fieldset>
				<legend>Inserimento numeri</legend>
				<p>
					<label for="numero">Numero: </label>
					<input type="number" name="numero", id="numero" placeholder="0" />
				</p>
			</fieldset>
			<input type="submit" /> 
			<input type="reset" />
		</form>
		<table>
			<tr>
				<th>Max</th>
				<th>Min</th>
				<th>Totale</th>
				<th>Numero di valori</th>
				<th>Media</th>
			</tr>
			<tr>
				<td><?php echo $max; ?></td>
				<td><?php echo $min; ?></td>
				<td><?php echo $tot;?></td>
				<td><?php echo $nVal; ?></td>
				<td><?php echo $media; ?></td>
			</tr>
		</table>
	</body>
</html>