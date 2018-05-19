<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea/ P&aacute;gina Principal</title>
	<?php include "meta.php" ?> 
</head>
<body>
	<?php include "header.php" ?>
	<div class="pagina">
		<div class="fila">
			<div class="carrusel">
					<h2 class="columna_m_8 imaginario_m_2 columna_l_8 imaginario_l_2 columna_xl_8 imaginario_xl_2 alinear_centro">Nuevos comics</h2>
				<div class=" contenedor_carrusel columna_m_8 imaginario_m_2 columna_l_8 imaginario_l_2 columna_xl_8 imaginario_xl_2 alinear_centro">
				<?php
				include "conexion.php";
				
				$sqlNew= "select * from comics ORDER BY id_comic DESC limit 3;";
							$query = edit($sqlNew);
							while ($row= pg_fetch_row($query)) {
								echo "<section class=\"contenido_carrusel \">";
								echo "<h3 class=\"alinear_centro titulo_carrusel\" >".$row[1]."</h3>";
								echo "<img class=\"imagen_carrusel\" alt=\"\" src=\"".$row[4]."\">";
							  	echo "<p class=\"alinear_centro texto_carrusel\">Precio: $".$row[3]." </p>";
							  	echo "</section>";
							}


				?>
				</div><!--Fin contenedor carrusel-->
				<div class="contenedor_navegador_carrusel columna_m_8 imaginario_m_2 columna_l_8 imaginario_l_2 columna_xl_8 imaginario_xl_2 alinear_centro">
				</div><!--Fin navegador carrusel-->
			</div><!--Fin carrusel-->
		</div><!--Fin fila-->
	</div><!--fin pagina-->


	<?php include "footer.php" ?>
</body>
</html>
