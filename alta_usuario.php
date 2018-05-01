<?php include  "conexion.php" ?>
<?php 
if(is_null($_SESSION['usuario'])){
	$usuario = $_POST['usuario']; 
	$contrasena = $_POST['pass'];
	$tipoUsuario = "cliente";
	$nombre = $_POST['nombre'];
	$apPaterno = $_POST['apat'];
	$apMaterno = $_POST['apmat'];
	$correo = $_POST['correo'];
	$calle = $_POST['calle'];
	$ciudad = $_POST['ciudad'];
	$colonia = $_POST['colonia'];
	$cp = $_POST['cp'];
	$num = $_POST['num'];
	$int = $_POST['int'];

	$sqlusuarios="select usuario from usuarios WHERE usuario = '".$usuario."';";
	$filtro_usuarios=consulta($sqlusuarios);
	if ($filtro_usuarios){
		header("Location: registro.php");
		echo "<p>Su nombre de Usuario ya está ocupado, por favor introduzca otro</p>";
	}
	else{
		$alta = "insert into usuarios (usuario, contrasena, tipousuario, nombre, apPaterno, apMaterno, correo, calle, ciudad, colonia, cp, num, int) values ('".$usuario."','".$contrasena."','".$tipoUsuario."','".$nombre."','".$apPaterno."','".$apMaterno."','".$correo."','".$calle."','".$ciudad."','".$colonia."','".$cp."','".$num."','".$int."')";	
	$altausuario=consulta($alta);
		
		if($altausuario){
		header("Location: index.php");
		}
	}
}
if($_SESSION['tipo']=='admin'){
	$usuario = $_POST['usuario']; 
	$contrasena = $_POST['pass'];
	$tipoUsuario = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$apPaterno = $_POST['apat'];
	$apMaterno = $_POST['apmat'];
	$correo = $_POST['correo'];
	$calle = $_POST['calle'];
	$ciudad = $_POST['ciudad'];
	$colonia = $_POST['colonia'];
	$cp = $_POST['cp'];
	$num = $_POST['num'];
	$int = $_POST['int'];

	$sqlusuarios="select usuario from usuarios WHERE usuario = '".$usuario."';";
	$filtro_usuarios=consulta($sqlusuarios);
	if ($filtro_usuarios){
		header("Location: registro.php");
		echo "<p>El nombre de Usuario ya está ocupado, por favor introduzca otro</p>";
	}
	else{
		$alta = "insert into usuarios (usuario, contrasena, tipousuario, nombre, apPaterno, apMaterno, correo, calle, ciudad, colonia, cp, num, int) values ('".$usuario."','".$contrasena."','".$tipoUsuario."','".$nombre."','".$apPaterno."','".$apMaterno."','".$correo."','".$calle."','".$ciudad."','".$colonia."','".$cp."','".$num."','".$int."')";	
	$altausuario=consulta($alta);
		
		if($altausuario){
		header("Location: index.php");
		}
	}	

}

	


?>
