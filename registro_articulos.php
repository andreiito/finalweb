<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Registro de art&iacute;culos</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	
	<div class="pagina">
		<form action="s.php" method="post">
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Registraro de art&iacute;culos </legend> 


				<div class="form_grupo">
					<label class="form_label" for="inputText"> Titulo del comic</label>
					<input type="text" class="form_control_grande" aria-label="ingrese titulo del comic" id="inputText" name="titulo" placeholder="texto" />  
				</div>
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Cantidad de comics disponibles</label>
					<input type="text" class="form_control_grande" aria-label="ingrese la cantidad disponible de comics" id="inputText" name="cantidad" placeholder="texto" />  
				</div>
				<div class="form_grupo">
					<label class="form_label" for="inputText"> Precio del comic</label>
					<input type="text" class="form_control_grande" aria-label="ingrese el precio del comic" id="inputText" name="precio" placeholder="texto" />  
				</div>
				<?php 
				if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
					echo "<div class=\"form_grupo\">";
						echo "<label class=\"form_label\" for=\"select\">Editorial del comic</label>"; 
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"editorial\">";

							include "conexion.php";
							$sqlEdit= "select * from editoriales;";
							$edit= consulta($sqlEdit);

							while ($row = pg_fetch_row($edit)) {
							  echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
							}
					echo "</select>";  
					echo "</div>";}

					echo "<div class=\"form_grupo\">";
						echo "<label class=\"form_label\" for=\"select\">Autor del comic</label>"; 
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"autor\">";

							$sqlAut= "select * from autores;";
							$aut= consulta($sqlEdit);

							while ($row = pg_fetch_row($aut)) {
							  echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
							}
					echo "</select>";  
					echo "</div>";}

				?>
			<div class="form_grupo">
				<label class="form_label" for="inputText"> imagen del comic</label>
				<input name="imgcomic" type="file" class="form_control_grande" id="inputText" accept=".jpg, .jpeg, .png">
			</div>	


			<input type="submit" class="button" value="Registrar comic">
			</fieldset>
		</form>
	
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>
