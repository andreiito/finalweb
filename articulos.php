<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea/ P&aacute;gina Principal</title>
	<?php include "meta.php" ?> 
</head>
<body>
	<?php include "header.php" ?>
	<div class="pagina">
		<br/><br/>
		<div class="fila">
			<h1> Articulos en venta </h1>
			<div class="datos"></div>
		</div>
		
				<?php
				include "conexion.php";
				
				$sqlNew= "select * from comics;";
				$query = edit($sqlNew);
				while ($row= pg_fetch_row($query)) {
					echo "<div class= \"fila\">";
					echo "<div class=\" columna_m_12 imaginario_m_12 columna_l_12 imaginario_l_12 columna_xl_12 imaginario_xl_12 articulo\" id=\"".$row[0]."\">";
					echo "<h3 class=\"alinear_centro columna_m_12 columna_l_12 columna_xl_12 \" >".$row[1]."</h3>";
					echo "<img class=\"columna_m_4 columna_l_4 columna_xl_4\" alt=\"\" src=\"".$row[4]."\">";					
				  	echo "<p class=\"columna_m_4 imaginario_m_4 columna_l_4 imaginario_l_4 columna_xl_4 \">Precio: ".$row[3]." </p>";
				  	echo "<button class=\"addCart\">Agregar al carrito</button>";
					echo "</div><!--fin articulo-->";
					echo "</div><!--fin fila--> <br/> <br/>";
			  	}
				
				?>
	</div><!--fin pagina-->


	<?php include "footer.php" ?>
</body>
</html>
