<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea: Carrito</title>
<?php include "meta.php"; ?>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="pagina">
		<br/> <br/>
		<h1>Tu carrito</h1>
		
		<?php
			include "conexion.php";
			
			//print($_SESSION['articulos'][0]);
			foreach($_SESSION['articulos'] as $id) {
			
				$sql = "select * from comics where id_comic ='".$id."';";
				$com = edit($sql);
				while ($row= pg_fetch_row($com)) {
					echo "<div class=\"fila\">";
					echo "<div class=\" columna_m_12 imaginario_m_12 columna_l_12 imaginario_l_12 columna_xl_12 imaginario_xl_12 articulo\" id=\"".$row[0]."\">";
					echo "<b><span class=\" columna_m_12 columna_l_12 columna_xl_12 \" >".$row[1]."</span></b><br/>";
					echo "<img class=\"columna_m_4 columna_l_4 columna_xl_4 img_art\" alt=\"\" src=\"".$row[4]."\">";
				  	echo "<p class=\"columna_m_4 columna_l_4 columna_xl_4 \">Descripci&oacute;n".$row[5]." </p>";					
				  	echo "<p class=\"columna_m_4 columna_l_4 columna_xl_4 preciocom\" name=\"\">Precio del comic: $<span class=\"precio\">".$row[3]."</span> </p>";
				  	echo "<p class=\"columna_m_4 columna_l_4 columna_xl_4 totalXcomic\">Precio por cantidad: $<span class=\"precioXcantidad\"></span> </p>";
				  	echo "<a class=\"elimCart alinear_centro\">Quitar del carrito</a>";
				  	echo "<p type=\"text\" class=\"alinear_centro\" >Cantidad a comprar: <span class=\"cantidad\" name=\"cantidad".$row[1]."\">1</span><span class=\"mas\">+</span><span class=\"menos\">-</span></p>";
					echo "</div></div><br/>";

				}
			}
			echo "Total de la compra: $<span class=\"total\" ></span>";
			


?>
<br/>
		<a class="comprar" href="comprar.php">Comprar</a>
		
	</div><!--fin pagina-->
	<?php include "footer.php"; ?>
</body>
</html>
