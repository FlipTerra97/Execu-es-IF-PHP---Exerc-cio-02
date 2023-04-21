<!DOCTYPE html>
<html>
<head>
	<title>Programa em PHP para escolher o produto mais barato</title>
</head>
<body>
	<h1>Programa em PHP para escolher o produto mais barato</h1>

	<form action="" method="post">
		<label for="preco1">Digite o preço do primeiro produto:</label>
		<input type="number" id="preco1" name="preco1"><br><br>

		<label for="preco2">Digite o preço do segundo produto:</label>
		<input type="number" id="preco2" name="preco2"><br><br>

		<label for="preco3">Digite o preço do terceiro produto:</label>
		<input type="number" id="preco3" name="preco3"><br><br>

		<input type="submit" value="Escolher o Produto Mais Barato">
	</form>

	<?php
		if(isset($_POST['preco1']) && isset($_POST['preco2']) && isset($_POST['preco3'])) {
			$preco1 = $_POST['preco1'];
			$preco2 = $_POST['preco2'];
			$preco3 = $_POST['preco3'];

			if($preco1 <= $preco2 && $preco1 <= $preco3) {
				echo "<p>Compre o primeiro produto, que custa R$ $preco1.</p>";
			} elseif($preco2 <= $preco1 && $preco2 <= $preco3) {
				echo "<p>Compre o segundo produto, que custa R$ $preco2.</p>";
			} else {
				echo "<p>Compre o terceiro produto, que custa R$ $preco3.</p>";
			}
		}
	?>
</body>
</html>
