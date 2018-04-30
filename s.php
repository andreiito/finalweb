<?php 
session_start();
print $_SESSION['tipo'];
if(isset( $_SESSION['usuario'])){
			echo "<h1>a</h1>";
}

//var_dump ($_SESSION);?>
