<?php
session_start();
//var_dump ($_SESSION);
include "conexion.php";
if($_SESSION['tipo']=='admin'){
	$sqlbaja="delete from usuarios WHERE usuario = '".$_POST['usuario']."';";
	$baja_usuarios=consulta($sqlbaja);
	
		header("Location: index.php");
	
}

if($_SESSION['tipo']=='cliente'){
	$sqlbaja="delete from usuarios WHERE usuario = '".$_SESSION['usuario']."';";
	$baja_usuarios=consulta($sqlbaja);

	
	session_destroy();
	header ("location: index.php");

}
?>
