<?php
session_start();
include "conexion.php";
if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
		
	$titulo = $_POST['titulo']; 
	$cant = (int) $_POST['cantidad'];
	$precio = (int) $_POST['precio'];
	$edit = $_POST['editorial'];
	$autor = $_POST['autor'];
	$desc = $_POST['desc'];
	$descri =$_POST['descripcion'];
	$id_comic=$_POST['id_comic'];
	
    $scomic = "update comics set titulo='".$titulo."', cantidad= ".$cant.", precio=".$precio.", descripcion='".$descri."', id_editorial='".$edit."', id_descuento=".$desc." where id_comic=".$id_comic.";";	
	$altacomic=consulta($scomic);
	header ("location: index.php");
				

}
if($_SESSION['tipo']=='cliente'){
	header ("location: index.php");
}
?>
