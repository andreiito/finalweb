<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Registro de art&iacute;culos</title>
<?php include "meta.php" ?>
</head>
<body>
	<?php include "header.php" ?>
	<?php include "red_cliente.php" ?>
	
	<div class="pagina">
		<form action="mod_articulo.php" method="post" enctype="multipart/form-data">
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Registraro de art&iacute;culos </legend> 

					<?php session_start();
					if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
					include "conexion.php";
					$comicID = $_POST['modificar'];
					
							$sqlElim= "select * from comics where id_comic = ".$comicID.";";
							$query = edit($sqlElim);
							
				while ($row= pg_fetch_row($query)) {


				echo "<div class=\"form_grupo\">";
				echo "<input type=\"text\" class=\"form_control_grande oculto\" aria-label=\"ingrese titulo del comic\" id=\"inputText\" name=\"id_comic\" placeholder=".$row[0]." />";  
				echo "<label class=\"form_label\" for=\"inputText\"> Titulo del comic</label>";
				echo	"<input type=\"text\" class=\"form_control_grande\" aria-label=\"ingrese titulo del comic\" id=\"inputText\" name=\"titulo\" placeholder=".$row[1]." />";  
				echo "</div><div class=\"form_grupo\"><label class=\"form_label\" for=\"inputText\"> Descripción del comic</label>";
				echo	"<input type=\"text\" class=\"form_control_grande\" aria-label=\"ingrese titulo del comic\" id=\"inputText\" name=\"descripcion\" placeholder=".$row[2]." />";  
				echo "</div><div class=\"form_grupo\"><label class=\"form_label\" for=\"inputText\"> Cantidad de comics disponibles</label>";
				echo 	"<input type=\"text\" class=\"form_control_grande\" aria-label=\"ingrese la cantidad disponible de comics\" id=\"inputText\" name=\"cantidad\" placeholder=".$row[3]." />";  
				echo "</div><div class=\"form_grupo\"><label class=\"form_label\" for=\"inputText\"> Precio del comic</label>";
				echo 	"<input type=\"text\" class=\"form_control_grande\" aria-label=\"ingrese el precio del comic\" id=\"inputText\" name=\"precio\" placeholder=".$row[4]." />";  
				echo "</div><div class=\"form_grupo\"><label class=\"form_label\" for=\"inputText\"> Descuento del comic</label>";
				}
				
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"desc\">";
					$sqlDesc= "select * from descuento;";
							$query = edit($sqlDesc);	
							

							while ($l= pg_fetch_row($query)) {
							  echo "<option value=\"".$l[0]."\">".$l[1]."</option>";
							}
					echo "</select>";  
					echo "</div>";


					echo "<div class=\"form_grupo\">";
					echo "<label class=\"form_label\" for=\"select\">Editorial del comic</label>"; 
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"editorial\">";
					
							$sqlEdit= "select * from editoriales;";
							$query = edit($sqlEdit);	
							

							while ($l= pg_fetch_row($query)) {
							  echo "<option value=\"".$l[0]."\">".$l[1]."</option>";
							}
					echo "</select>";  
					echo "</div>";

					echo "<div class=\"form_grupo\">";
						echo "<label class=\"form_label\" for=\"select\">Autor del comic</label>"; 
					echo "<select class=\"form_control_chico\" id=\"select\" name=\"autor\">";

							$sqlAut= "select * from autores;";
							$aut= edit($sqlAut);

							while ($l = pg_fetch_row($aut)) {
							  echo "<option value=\"".$l[0]."\">".$l[1]." ".$l[2]."</option>";
							}
					echo "</select>";  
					echo "</div>";}

				?>
			<input type="submit" class="button" value="Modificar comic">
			</fieldset>
		</form>
	
	</div><!--fin pagina-->
	<?php include "footer.php" ?>
</body>
</html>
