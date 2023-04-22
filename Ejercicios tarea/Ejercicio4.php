<!DOCTYPE html>
<html>
<head>
	<title>Juego de Azar</title>
	<style>
		table {
			border-collapse: collapse;
			margin: 20px;
		}

		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
		}

		th {
			background-color: green;
			color: white;
		}

		.result {
			margin-top: 20px;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Juego de Azar</h1>
	<form method="POST">
		<label for="numero">Número (0-100):</label>
		<input type="number" id="numero" name="numero" min="0" max="100" required>
		<br>
		<label for="costo">Costo ($1-$10):</label>
		<input type="number" id="costo" name="costo" min="1" max="10" required>
		<br>
		<button type="submit">Jugar</button>
	</form>

	<?php
	if (isset($_POST['numero']) && isset($_POST['costo'])) {
		$numero = (int)$_POST['numero'];
		$costo = (int)$_POST['costo'];

		$precios = array(70, 140, 210, 280, 350, 420, 490, 560, 630, 700);

		$ganancia = 0;
		if ($numero < 50) {
			$ganancia = $precios[$costo - 1];
		}

		echo "<div class='result'>Ganó $ganancia dólares.</div>";

	}
	?>

	<table>
		<tr>
			<th>Costo</th>
			<th>Ganancia</th>
		</tr>
		<tr>
			<td>$1</td>
			<td>$70</td>
		</tr>
		<tr>
			<td>$2</td>
			<td>$140</td>
		</tr>
		<tr>
			<td>$3</td>
			<td>$210</td>
		</tr>
		<tr>
			<td>$4</td>
			<td>$280</td>
		</tr>
		<tr>
			<td>$5</td>
			<td>$350</td>
		</tr>
		<tr>
			<td>$6</td>
			<td>$420</td>
		</tr>
		<tr>
			<td>$7</td>
			<td>$490</td>
		</tr>
		<tr>
			<td>$8</td>
			<td>$560</td>
		</tr>
		<tr>
			<td>$9</td>
			<td>$630</td>
		</tr>
		<tr>
			<td>$10</td>
			<td>$700</td>
		</tr>
	</table>
</body>
</html>

