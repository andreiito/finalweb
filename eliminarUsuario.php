<?php include  "conexion.php" ?>
<?php

session_start(); 

if($_SESSION['tipo']=='admin'){
	$sqlbaja="delete from usuarios WHERE usuario = '".$_POST['usuario']."';";
	$baja_usuarios=consulta($sqlusuarios);
	if ($baja_usuarios){
		header("Location: index.php");
	}
}

if($_SESSION['tipo']=='cliente'){
$sqlbaja="delete from usuarios WHERE usuario = '".$_SESSION['usuario']."';";
$baja_usuarios=consulta($sqlusuarios);
session_destroy();
	if ($baja_usuarios){
		header("Location: index.php");
	}
?>