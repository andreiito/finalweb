<?php 
include "conexion.php";
	
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];

	$sqlval = "select * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$pass."'";
	$valUP = consulta($sqlval);
	if ($valUP){	
		$tipoUsuario = "select tipousuario FROM usuarios WHERE usuario='".$usuario."';";
		$tUs= consulta($tipoUsuario);
		$us= $tUs[0]['tipousuario'];
		

		session_start();
		$_SESSION['tipo']= $us;
		$_SESSION['usuario']= $usuario;

		var_dump ($_SESSION);
		header("Location: index.php");
		
	}
	else{
		header("Location: login.php");
		//echo "<p>Su usuario o contraseña es incorrecto</p>";
	}


	?>
