<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Modificar art&iacute;culo</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	<?php include "red_cliente.php" ?>
	
	<div class="pagina">
	<form action="form_usuario_mod.php" method="post" >
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Modificar un art&iacute;culo </legend> 
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Seleccione el  comic que desee modificar</label>
			<?php
			include "conexion.php";
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"modificar\">";
					$sqlElim= "select * from comics;";
							$query = edit($sqlElim);	
							

							while ($row= pg_fetch_row($query)) {
							  echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
							}
					echo "</select>";  
					echo "</div>";
					?>
				<input type="submit" class="button" value="Modificar comic">
			</fieldset>
		</form>
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>