<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Eliminar art&iacute;culo</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	
	<div class="pagina">
	<form action="baja_articulo.php" method="post" >
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Eliminar un art&iacute;culo </legend> 
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Seleccione el  comic que desee eliminar</label>
			<?php
			include "conexion.php";
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"eliminar\">";
					$sqlElim= "select * from comics;";
							$query = edit($sqlElim);	
							

							while ($row= pg_fetch_row($query)) {
							  echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
							}
					echo "</select>";  
					echo "</div>";
					?>
				<input type="submit" class="button" value="Registrar comic">
			</fieldset>
		</form>
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>
