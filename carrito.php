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
		<div>
		<form action="compra.php" method="post" >
				
			<fieldset class="fieldset_form"> <legend class="legend_form"> Articulos del Carrito </legend> 
				<div class="form_grupo">
		<?php
			include "conexion.php";
			//var_dump($_SESSION['articulos']);
			foreach ($_SESSION['articulos'] as $id) {
				$sql = "select * from comics where id_comic =".$id.";";
				$com = edit($sql);
				while ($row= pg_fetch_row($query)) {
					echo "<div class=\"articulo\" id=\"".$row[0]."\">";
					echo "<span class=\" columna_m_12 columna_l_12 columna_xl_12 \" ><b>".$row[1]."</b></span><br/>";
					echo "<img class=\"columna_m_4 columna_l_4 columna_xl_4 img_art\" alt=\"\" src=\"".$row[4]."\">";					
				  	echo "<p class=\"columna_m_4 columna_l_4 columna_xl_4 \">Precio: ".$row[3]." </p>";
				  	$total = $total + $row[3];
				  	echo "<button class=\"elimCart\">Quitar del carrito</button>";


				}
			}
			echo "Total de la compra: $".$total;
			


		?>
		<input type="submit" class="button" value="Comprar">
		</fieldset>
		</form>
		</div>
	</div><!--fin pagina-->
	<?php include "footer.php"; ?>
</body>
</html>