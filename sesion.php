<?php 

	session_start();
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];

	$sqlval = "select * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$pass."'";
	include "conexion.php";
	$valUP = consulta($sqlval);
	if ($valUP){	
		$tipoUsuario = "select tipousuario FROM usuarios WHERE usuario='".$usuario."';";
		$tUs= consulta($tipoUsuario);
		$us= $tUs[0]['tipousuario'];
		

	
		$_SESSION['tipo']= $us;
		$_SESSION['usuario']= $usuario;

		header("Location: index.php");
		
	}
	else{
		header("Location: login.php");
		//echo "<p>Su usuario o contraseña es incorrecto</p>";
	}


	?>
