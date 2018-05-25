<?php
session_start();
//var_dump ($_SESSION);
include "conexion.php";
if($_SESSION['tipo']=='admin'){
	$sqlbaja="update usuarios set contrasena=\"cancelado\" where usuario = '".$_POST['usuario']."';";
	$baja_usuarios=consulta($sqlbaja);
	
		header("Location: index.php");
	
}

if($_SESSION['tipo']=='cliente'){
	$sqlbaja="update usuarios set contrasena=\"cancelado\" where usuario = '".$_SESSION['usuario']."';";
	$baja_usuarios=consulta($sqlbaja);

	
	session_destroy();
	header ("location: index.php");

}
?>
