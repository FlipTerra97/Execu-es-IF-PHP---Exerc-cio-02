<!DOCTYPE html>
<html>
<head>
	<title>Programa em PHP para verificar o sexo</title>
</head>
<body>
	<h1>Programa em PHP para verificar o sexo</h1>

	<form action="" method="post">
		<label for="sexo">Digite o sexo (F/M):</label>
		<input type="text" id="sexo" name="sexo"><br><br>

		<input type="submit" value="Verificar">
	</form>

	<?php
		if(isset($_POST['sexo'])) {
			$sexo = strtoupper($_POST['sexo']); //converte para maiúsculo

			if($sexo == 'F') {
				echo "<p>Sexo feminino.</p>";
			} elseif($sexo == 'M') {
				echo "<p>Sexo masculino.</p>";
			} else {
				echo "<p>Sexo inválido.</p>";
			}
		}
	?>
</body>
</html>