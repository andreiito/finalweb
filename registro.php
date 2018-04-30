<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Registrarse</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	
	<div class="pagina">
		<form action="alta_usuario.php" method="post">
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Registrarse a la p&aacute;gina </legend> 
					
				<!-- Nombre -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Nombre </label>
					<input type="text" class="form_control_grande" aria-label="ingrese su nombre" id="inputText" name="nombre" placeholder="texto" />  
				</div>

				<!-- Apellido Paterno -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Apellido Paterno </label>
					<input type="text" class="form_control_grande" aria-label="ingrese su apellido paterno" id="inputText" name="appat" placeholder="texto" />  
				</div>
				<!-- Apellido Materno -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Apellido Materno </label>
					<input type="text" class="form_control_grande" aria-label="ingrese su apellido materno" id="inputText" name="apmat" placeholder="texto" />  
				</div>
				<!-- Ciudad -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Ciudad </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="ciudad" placeholder="texto" />  
				</div>
				<!-- Calle -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Calle </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="calle" placeholder="texto" />  
				</div>
				
				<!-- Colonia -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Colonia </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="colonia" placeholder="texto" />  
				</div>
				<!-- Código postal -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> C&oacute;digo postal </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="cp" placeholder="texto" />  
				</div>
				<!-- Número -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> N&uacute;mero</label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="num" placeholder="texto" />  
				</div>
				<!-- Número interior -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> N&uacute;mero interior </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="int" placeholder="texto" />  
				</div>
				

				<!-- email -->
				<div class="form_grupo">
					<label class="form_label" for="inputEmail">Correo electr&oacute;nico</label>
					<input type="email" class="form_control_grande" aria-label="Ingresa tu correo electronico" id= "inputEmail" name="correo" placeholder="usuario@correo.com" />	
				</div>
				<!-- Nombre de usuario -->
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Nombre de Usuario </label>
					<input type="text" class="form_control_grande" aria-label="input de Texto" id="inputText" name="usuario" placeholder="texto" />  
				</div>
				
				<!-- contraseña -->
				<div class="form_grupo">
					<label class="form_label" for="inputContrasena">Contraseña</label>
					<input type="password" class="form_control_grande" aria-label="Ingresa contraseña" id= "inputContrasena" name="pass" pattern="\S{6,12}" />
				</div>

		<input type="submit" class="button">Registrarse</input>
			</fieldset>
		</form>
	
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>
