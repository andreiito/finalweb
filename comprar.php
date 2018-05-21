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
	$query_id_us= "select id_usuario FROM usuarios where usuario= '".$_SESSION['usuario']."';";
			$id_us = consulta($query_id_us);

			//datos para venta
			$id_us= $id_us[0]['id_usuario'];
			$fecha = date("Y/m/d");
						

			for($i=0;$i< count($_SESSION['compras']); $i= $i+2){
			//echo $_SESSION['compras'][$i];}
			$id = $_SESSION['compras'][$i];
			$cont =$i;	
			$cantidad= $_SESSION['compras'][$cont+1];
			
			$sql_disp="select cantidad from comics where id_comic = '".$id."';";
			$disp = consulta($sql_disp);
			$disp = $disp[0]['cantidad'];
			
			
			if($disp < $cantidad){
				 	echo "<p>No hay tantos articulos de un elemento de su carrito, por favor verifique su disponibilidad</p>";
				}
else{


			//registro de la venta
			$sql_venta ="insert into venta (fecha, id_usuario) values ('".$fecha."','".$id_us."');";
			$venta= consulta($sql_venta);

			//datos para ventaXComic
			$sql_id_venta ="select id_venta from venta where id_usuario='".$id_us."' and fecha= '".$fecha."';";
			$id_venta = consulta($sql_id_venta);

			$id_venta= $id_venta[0]['id_venta'];
			
				
				$sql_vxc="insert into ventaxcomics (id_venta, id_comic, cantidad) values ('".$id_venta."','".$id."','".$cantidad."');";
				$vxc = consulta($sql_vxc);
				
				$actual = $disp - $cantidad;

				$sql_actcom="update comics set cantidad =".$actual." where id_comic='".$id."';";
				$actcom=consulta($sql_actcom);
				echo "<p>Compra Realizada</p>";
			

}}

			
			
			
			


?>

	</div><!--fin pagina-->
	<?php include "footer.php"; ?>
</body>
</html>
