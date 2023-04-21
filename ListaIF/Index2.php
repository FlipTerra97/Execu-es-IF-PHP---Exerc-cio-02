<!DOCTYPE html>
<html>
<head>
	<title>Programa em PHP para verificar se um número é positivo ou negativo</title>
</head>
<body>
	<h1>Programa em PHP para verificar se um número é positivo ou negativo</h1>

	<form action="" method="post">
		<label for="num">Digite um número:</label>
		<input type="number" id="num" name="num"><br><br>

		<input type="submit" value="Verificar">
	</form>

	<?php
		if(isset($_POST['num'])) {
			$num = $_POST['num'];

			if($num > 0) {
				echo "<p>O número " . $num . " é positivo.</p>";
			} elseif($num < 0) {
				echo "<p>O número " . $num . " é negativo.</p>";
			} else {
				echo "<p>O número digitado é zero.</p>";
			}
		}
	?>
</body>
</html>
