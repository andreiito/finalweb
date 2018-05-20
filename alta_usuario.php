<?php
session_start();
include "conexion.php";
if(!$_SESSION['usuario']){
	$usuario = $_POST['usuario']; 
	$contrasena = md5($_POST['pass']);
	$tipoUsuario = 3;
	$nombre = $_POST['nombre'];
	$apPaterno = $_POST['appat'];
	$apMaterno = $_POST['apmat'];
	$correo = $_POST['correo'];
	$calle = $_POST['calle'];
	$ciudad = $_POST['ciudad'];
	$colonia = $_POST['colonia'];
	$del=$_POST['del'];
	$cp = $_POST['cp'];
	$num = $_POST['num'];
	$int = $_POST['int'];
	$tel = $_POST['tel'];

	$sqlusuarios="select usuario from usuarios WHERE usuario = '".$usuario."';";
	$filtro_usuarios=consulta($sqlusuarios);
	if ($filtro_usuarios){
		header("Location: registro.php");
		echo "<p>Su nombre de Usuario ya está ocupado, por favor introduzca otro</p>";
	}
	else{
		$alta = "insert into usuarios (nombre, appaterno, apmaterno, telefono, correo, usuario, contrasena, id_tipo) values ('".$nombre."','".$apPaterno."','".$apMaterno."','".$tel."','".$correo."','".$usuario."','".$contrasena."','".$tipoUsuario."');";	
	
		$altausuario=consulta($alta);
		$selUs= "select id_usuario from usuarios where usuario='".$usuario."';";
		
		$idUs = consulta($selUs);
		$idUs = $idUs[0]['id_usuario'];
		
		$sqlDir= "insert into direccion (ciudad, calle, numero, numero_int, colonia, delegacion, cp, id_usuario) values ('".$ciudad."','".$calle."','".$num."','".$int."','".$colonia."', '".$del."','".$cp."',".$idUs.");";
		
		$dir = consulta($sqlDir);

		header("Location: index.php");
		
	}
}
if($_SESSION['tipo']=='admin'){
		
	$usuario = $_POST['usuario']; 
	$contrasena = md5($_POST['pass']);
	$tipoUsuario = (int) $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$apPaterno = $_POST['appat'];
	$apMaterno = $_POST['apmat'];
	$correo = $_POST['correo'];
	$calle = $_POST['calle'];
	$ciudad = $_POST['ciudad'];
	$colonia = $_POST['colonia'];
	$del=$_POST['del'];
	$cp = $_POST['cp'];
	$num = $_POST['num'];
	$int = $_POST['int'];

	$sqlusuarios="select usuario from usuarios WHERE usuario = '".$usuario."';";
	$filtro_usuarios=consulta($sqlusuarios);
	if ($filtro_usuarios){
		header("Location: registro.php");
		//echo "<p>El nombre de Usuario ya está ocupado, por favor introduzca otro</p>";
	}
	else{
		$alta = "insert into usuarios (nombre, appaterno, apmaterno, telefono, correo, usuario, contrasena, id_tipo) values ('".$nombre."','".$apPaterno."','".$apMaterno."','".$tel."','".$correo."','".$usuario."','".$contrasena."','".$tipoUsuario."')";	
		$altausuario=consulta($alta);
		$selUs= "select id_usuario from usuarios where usuario='".$usuario."';";
		$idUs = consulta($selUs);
		$sqlDir= "insert into direccion (ciudad, calle, numero, numero_int, colonia, delegacion, cp, id_usuario) values ('".$ciudad."','".$calle."','".$num."','".$int."','".$colonia."', '".$del."','".$cp."',".$idUs.");";
		
		header("Location: index.php");
		
	}	

}

	


?>
