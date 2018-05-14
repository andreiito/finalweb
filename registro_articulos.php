<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Registro de art&iacute;culos</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	
	<div class="pagina">
		<form action="alta_usuario.php" method="post">
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Registraro de art&iacute;culos </legend> 


				<div class="form_grupo">
					<label class="form_label" for="inputText"> Titulo del comic</label>
					<input type="text" class="form_control_grande" aria-label="ingrese titulo del comic" id="inputText" name="titulo" placeholder="texto" />  
				</div>
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Cantidad de comics disponibles</label>
					<input type="text" class="form_control_grande" aria-label="ingrese la cantidad disponible de comics" id="inputText" name="titulo" placeholder="texto" />  
				</div>
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Precio del comic</label>
					<input type="text" class="form_control_grande" aria-label="ingrese el precio del comic" id="inputText" name="titulo" placeholder="texto" />  
				</div>
				<?php 
				if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
					echo "<div class=\"form_grupo\">";
						echo "<label class=\"form_label\" for=\"select\">Editorial del comic</label>"; 
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"editorial\">";
							$sqlEdit= "select * from editoriales";
							
					  echo "<option value=\"3\">Cliente</option>";
					  echo "<option value=\"2\">Ventas</option>";
					  echo "<option value=\"1\">Administrador</option>";
					echo "</select>";  
					echo "</div>";}

				?>
				<?php 
				if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
					echo "<div class=\"form_grupo\">";
						echo "<label class=\"form_label\" for=\"select\">Autor del comic</label>"; 
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"tipo\">";
					  echo "<option value=\"3\">Cliente</option>";
					  echo "<option value=\"2\">Ventas</option>";
					  echo "<option value=\"1\">Administrador</option>";
					echo "</select>";  
					echo "</div>";}

				?>


			<input type="submit" class="button" value="Registrarse">
			</fieldset>
		</form>
	
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>
