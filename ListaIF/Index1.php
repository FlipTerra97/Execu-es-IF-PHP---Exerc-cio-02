<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Programa em PHP para imprimir o maior número</title>
</head>
<body>
	<h1>Programa em PHP para imprimir o maior número</h1>

	<form action="" method="post">
		<label for="num1">Digite o primeiro número:</label>
		<input type="number" id="num1" name="num1"><br><br>

		<label for="num2">Digite o segundo número:</label>
		<input type="number" id="num2" name="num2"><br><br>

		<input type="submit" value="Verificar">
	</form>

	<?php
		if(isset($_POST['num1']) && isset($_POST['num2'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			if($num1 > $num2) {
				echo "<p>O maior número é: " . $num1 . "</p>";
			} else {
				echo "<p>O maior número é: " . $num2 . "</p>";
			}
		}
	?>
</body>
</html>
