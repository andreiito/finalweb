<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda en linea/ DCA</title>
	<?php include "meta.php" ?> 
</head>
<body>
	<?php include "header.php" ?>
	<?php // include once "conexión.php" ?>
	<div class="pagina">
		<div class="fila">
			<div class="carrusel">
					<h2 class="columna_m_8 imaginario_m_2 columna_l_8 imaginario_l_2 columna_xl_8 imaginario_xl_2 alinear_centro">Carrusel con titulo, imagen y texto</h2>
				<div class=" contenedor_carrusel columna_m_8 imaginario_m_2 columna_l_8 imaginario_l_2 columna_xl_8 imaginario_xl_2 alinear_centro">
					<section class="contenido_carrusel ">
						<h1 class="alinear_centro titulo_carrusel" >Lorem ipsum dolor</h1>
						<img class="imagen_carrusel" alt="codigo QR quemandose" src="img/codigo.jpg">
						<p class="alinear_centro texto_carrusel">
							Texto ejemplo de la primer imagen
						</p>
					</section>
						<section class="contenido_carrusel ">
						<h1 class="alinear_centro titulo_carrusel" >Lorem ipsum dolor sit</h1>
						<img class="imagen_carrusel" alt="Muestra un 'planeta' de color azul"src="img/cosmos.jpg">
						<p class="alinear_centro texto_carrusel">
							Texto ejemplo de la segunda imagen
						</p>
					</section>
					<section class="contenido_carrusel ">
						<h1 class="alinear_centro titulo_carrusel" >Lorem ipsum dolor</h1>
						<img class="imagen_carrusel" alt="codigo QR quemandose" src="img/codigo2.jpg">
						<p class="alinear_centro texto_carrusel">
							Texto ejemplo de la tercer imagens
						</p>
					</section>
				</div><!--Fin contenedor carrusel-->
				<div class="contenedor_navegador_carrusel columna_m_8 imaginario_m_2 columna_l_8 imaginario_l_2 columna_xl_8 imaginario_xl_2 alinear_centro">
				</div><!--Fin navegador carrusel-->
			</div><!--Fin carrusel-->
		</div><!--Fin fila-->
	</div><!--fin pagina-->


	<?php include "footer.php" ?>
</body>
</html>
