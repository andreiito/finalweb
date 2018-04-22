<!DOCTYPE html>
<html>
	<head>
		<title>Inicio de sesiòn</title>
	<?php include "meta.php" ?>
	</head>
	<body>
	<?php include "header.php" ?>
		<h1>Inicio de Sesiòn</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Registro</h2>
	<form action="menu.php" method="post">
	<label for="usuario">Usuario</label>
	<input type="text" name="usuario" autocomplete="off">
	<label for "password">Contraseña</label>
	<input type="password" name="password" autocomplete="off">
		<input type="submit" value="Enviar">
	</form>
	
	<?php include "footer.php" ?>
	</body>
</html>
	
