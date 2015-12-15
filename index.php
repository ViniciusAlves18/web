<?php
	require_once("load/pdo.php");
	$pdo = new pdoclass;
	$pdo->connection();

	global $pdo;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Page Registre</title>
</head>
<body>
	<form name="Registro" id="Registro" method="POST">
		<input type="text" name="Login" id="Login" placeholder="Digite um login"/>
		<input type="password" name="Password" id="Password" placeholder="Digite uma senha" />
		<input type="text" name="Email" id="Email" placeholder="Digite um Email" />
		<hr>
		<select name="dia" id="dia">
		<option disabled>Dia do Nascimento</option>
		<?php for($i=1;$i<32;$i++) 
			echo "<option value=\"$i\">$i</option>";
		?>
		</select>
		<select name="mes" id="mes">
		<option disabled>Mês do Nascimento</option>
		<?php for($i=1;$i<13;$i++) 
			echo "<option value=\"$i\">$i</option>";
		?>
		</select>
		<select name="ano" id="ano">
		<option disabled>Ano do Nascimento</option>
		<?php for($i=1981;$i<date("Y");$i++) 
			echo "<option value=\"$i\">$i</option>";
		?>
		</select>
		<input type="button" id="button" class="btn" value="Aceito todos os Termos e me desejo me cadastrar!">
	</form>
</body>
</html>