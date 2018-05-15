<?php
session_start();
include "conexion.php";
if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
		
	$titulo = $_POST['titulo']; 
	$cant = (int) $_POST['cantidad'];
	$precio = (int) $_POST['precio'];
	$edit = $_POST['editorial'];
	$autor = $_POST['autor'];
	$url = $_POST['url'];
	

	$sqlcomic="select titulo from comics WHERE titulo = '".$titulo."';";
	$filtro_comic=consulta($sqlcomic);
	if ($filtro_comic){
		header("Location: registro.php");
		//echo "<p>El nombre de Usuario ya está ocupado, por favor introduzca otro</p>";
	}
	else{
		$scomic = "insert into comics (titulo, cantidad, precio, url, id_editorial) values ('".$titulo."',".$cant.",".$precio.",'".$url."','".$edit."')";	
		$altacomic=consulta($scomic);
		header("Location: index.php");
	}	

}
?>
