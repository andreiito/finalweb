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
		<h1>Gracias por su compra</h1>
		
<?php


			include "conexion.php";
			//mail
			$query_correo= "select correo FROM usuarios where usuario= '".$_SESSION['usuario']."';";
			$correo = consulta($query_correo);

			//datos para venta
			$correo= $correo[0]['correo'];
			
		echo "<p>En breve recibir&aacute; un correo a: ".$correo." con los detalles de su compra</p>";
			mail($correo, 'Venta', 'Su compra se ha efectuado');

			
			$query_id_us= "select id_usuario FROM usuarios where usuario= '".$_SESSION['usuario']."';";
			$id_us = consulta($query_id_us);

			//datos para venta
			$id_us= $id_us[0]['id_usuario'];
			$fecha = date("Y/m/d");

			//registro de la venta
			$sql_venta ="insert into venta (fecha, id_usuario) values ('".$fecha."','".$id_us."');";
			$venta= consulta($sql_venta);

			//datos para ventaXComic
			$sql_id_venta ="select id_venta form ventas where id_usuario='".$id_us-"' and fecha= '".$fecha."';";
			$id_venta = consulta($sql_id_venta);

			$id_venta= $id_venta[0]['id_venta'];
			
			foreach($_SESSION['articulos'] as $id) {
				$sql = "select id_comic from comics where id_comic ='".$id."';";
				$com = consulta($sql);
				$com= $com[0]['id_comic'];

				$sql_vxc="insert into ventaxcomics (id_venta, id_comic) values ('".$id_venta."','".$id_comic."');";
				$vxc = consulta($sql_vxc);
				
			}
			
			


?>

	</div><!--fin pagina-->
	<?php include "footer.php"; ?>
</body>
</html>
