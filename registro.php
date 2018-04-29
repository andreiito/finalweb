<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Registrarse</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	<?php //include once "conexion.php" ?>
	
	<div class="pagina">
		<form action="alta_usuario.php" method="post">
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Registrarse a la p&aacute;gina </legend> 
					
				<!-- Nombre -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Nombre </label>
					<input type="text" class="form_control_grande" aria-label="ingrese su nombre" id="inputText" name="usuario_nombre" placeholder="texto" />  
				</div>

				<!-- Apellido Paterno -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Apellido Paterno </label>
					<input type="text" class="form_control_grande" aria-label="ingrese su apellido paterno" id="inputText" name="usuario_appat" placeholder="texto" />  
				</div>
				<!-- Apellido Materno -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Apellido Materno </label>
					<input type="text" class="form_control_grande" aria-label="ingrese su apellido materno" id="inputText" name="usuario_apmat" placeholder="texto" />  
				</div>
				<!-- Dirección -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Direcci&oacute;n </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="inputText" placeholder="texto" />  
				</div>
				

				<!-- email -->
				<div class="form_grupo">
					<label class="form_label" for="inputEmail">Correo electr&oacute;nico</label>
					<input type="email" class="form_control_grande" aria-label="Ingresa tu correo electronico" id= "inputEmail" name="usuario_correo" placeholder="usuario@correo.com" />	
				</div>
				
				
				<!-- contraseña -->
				<div class="form_grupo">
					<label class="form_label" for="inputContrasena">Contraseña</label>
					<input type="password" class="form_control_grande" aria-label="Ingresa contraseña" id= "inputContrasena" name="usuario_pass" pattern="\S{6,12}" />
				</div>

				<input type="submit" class="button">Registrarse</input>
			</fieldset>
		</form>
	
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>
