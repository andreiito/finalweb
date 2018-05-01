<!DOCTYPE html>
<html>
	<head>
		<title>Eliminar mi cuenta</title>
	<?php include "meta.php" ?>
	</head>
	<body>
	<?php include "header.php" ?>
		<h1>Eliminar mi cuenta</h1>
		<p>¿Est&aacute; seguro de eliminar su cuenta?.</p>
		<br/> <br/>
		<h2>Registro</h2>
	<form action="eliminarUsuario.php" method="post">
			<a href="index.php">Regresar</a></br>
			<?php
				if($_SESSION['tipo']=='admin'){
					// Nombre de usuario
					echo "<div class=\"form_grupo\">";
						echo "<label class=\"form_label\" for=\"inputText\"> Nombre de Usuario </label>";
						echo "<input type=\"text\" class=\"form_control_grande\" aria-label=\"input de Texto\" id=\"inputText\" name=\"usuario\" />";  
					echo "</div>";
				}
			?>
			<input type="submit" value="Eliminar cuenta">
	</form>
	
	<?php include "footer.php" ?>
	</body>
</html>
