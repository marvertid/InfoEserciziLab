<!--  Dato un array eterogeneo di 10 elementi, scrivere uno script per stabilire il tipo di ciascuno di
essi (boolean, integer, float o string)
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="MARVERTI DIEGO 5AI" />
		<title>ESERCIZIO 47</title>
	</head>
	<body>
		<h1>Esercizio 47</h1>
		<h2>Marverti Diego</h2>
		<?php
			function findType($var) {
				if (is_bool($var)) {
					return "Boolean";
				} else 

				switch ($var) {
					case is_bool($var): return "Boolean";
					case is_integer($var): return "Integer";
					case is_float($var): return "Float";
					case is_string($var): return "String";
				}
			}

			function findArrayTypes($array) {
				$output = " [";
				foreach ($array as $value) {
					$output .= " " . findType($value) . " ,";
				}
				$output = substr($output, 0, -1);
				$output .= " ]";

				return $output;
			}

			$array = ["ciao", 47, true, false, 33, 2.1, "22", "bella"];
			echo "<b>Array</b>: " . implode(", ", $array) . "<br /> ";
			echo "<b>Tipi dell'array</b>: " . findArrayTypes($array);
		?>
	</body>
</html>