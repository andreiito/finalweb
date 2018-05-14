<?php 
session_start();


//print $_SESSION['tipo'];
//if(isset( $_SESSION['usuario'])){
//			echo "<h1>a</h1>";
//}

//var_dump ($_POST);
//var_dump ($_SESSION);
include "conexion.php";
$sqlEdit= "select * from editoriales;";
$edit= consulta($sqlEdit);
echo $edit[0]['id_editorial'];
echo $edit[0]['nombre'];
?>
