<?php session_start();
$comicID = $_POST['eliminar'];
include "conexion.php";
	$sqlElim= "delete from comics where id_comic = ".$comicID.";";
	$query = consulta($sqlElim);
	header("Location: index.php");




?>