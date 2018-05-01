<!DOCTYPE html>
<html>
	<head>
		<title>Inicio de sesi&oacute;n</title>
	<?php include "meta.php" ?>
	</head>
	<body>
	<?php include "header.php" ?>
		<br/> <br/>
		<h1>Inicio de Sesi&oacute;n</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
	<form action="sesion.php" method="post">
		<label for="usuario">Usuario</label>
		<input type="text" name="usuario" autocomplete="off">
		<label for "password">Contraseña</label>
		<input type="password" name="password" autocomplete="off">
			<input type="submit" value="Enviar">
	</form>
	
	<?php include "footer.php" ?>
	</body>
</html>
	
