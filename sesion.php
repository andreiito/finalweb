<?php 

	session_start();
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];

	$validacion = $pg_query($conexion, "select * FROM usuarios WHERE usuario='$usuario' AND contrasena='$pass'");

	if ($validacion){
		$_SESSION['cliente']= $usuario;
		header("Location: index.php")
		echo "Bienvenido ".$usuario;
	}
	else{
		header("Location: login.php");
		echo "Su usuario o contraseña está incorrecto";
	}
	?>