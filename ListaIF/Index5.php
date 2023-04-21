<!DOCTYPE html>
<html>
<head>
	<title>Programa em PHP para encontrar o maior número</title>
</head>
<body>
	<h1>Programa em PHP para encontrar o maior número</h1>

	<form action="" method="post">
		<label for="num1">Digite o primeiro número:</label>
		<input type="number" id="num1" name="num1"><br><br>

		<label for="num2">Digite o segundo número:</label>
		<input type="number" id="num2" name="num2"><br><br>

		<label for="num3">Digite o terceiro número:</label>
		<input type="number" id="num3" name="num3"><br><br>

		<input type="submit" value="Encontrar o Maior Número">
	</form>

	<?php
		if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];

			$maior = $num1;

			if($num2 > $maior) {
				$maior = $num2;
			}

			if($num3 > $maior) {
				$maior = $num3;
			}

			echo "<p>O maior número é $maior.</p>";
		}
	?>
</body>
</html>
