<?php 
include "conexion.php";
	
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];
	echo $usuario;

	$validacion = $pg_query($conexion, "select * FROM usuarios WHERE 'usuario'=".$usuario." AND 'contrasena'=".$pass."'");
	$tipoUsuario = $pg_query($conexion, "select tipoUsuario FROM usuarios WHERE 'usuario'='".$usuario."' AND 'contrasena'='".$pass."'");
	echo $tipoUsuario;

	if ($validacion){
		session_start();
		$_SESSION['cliente']= $usuario;
		header("Location: https//www.final.unam.mx/index.php");
		echo "Bienvenido ".$usuario;
	}
	else{
		header("Location: https//www.final.unam.mx/login.php");
		echo "<p>Su usuario o contraseña es incorrecto</p>";
	}


	?>
