<?php
session_start();
include "conexion.php";
if($_SESSION['tipo']=='admin'|| $_SESSION['tipo']=='venta'){
		
	$titulo = $_POST['titulo']; 
	$cant = (int) $_POST['cantidad'];
	$precio = (int) $_POST['precio'];
	$edit = $_POST['editorial'];
	$autor = $_POST['autor'];
	$url = $_POST['url'];

	$sqlcomic="select titulo from comics WHERE titulo = '".$titulo."';";
	$filtro_comic=consulta($sqlcomic);
	if ($filtro_comic){
		header("Location: registro.php");
		//echo "<p>El nombre de Usuario ya está ocupado, por favor introduzca otro</p>";
	}
	else{
		if(isset($_FILES["imgcomic"]) && $_FILES["imgcomic"]["name"]){

		$scomic = "insert into comics (titulo, cantidad, precio, url, id_editorial) values ('".$titulo."',".$cant.",".$precio.",'".$url."','".$edit."')";	
		$altacomic=consulta($scomic);
		
	    # si es un formato de imagen
        if($_FILES["imgcomic"]["type"]=="image/jpeg" || $_FILES["imgcomic"]["type"]=="image/pjpeg" || $_FILES["imgcomic"]["type"]=="image/gif" || $_FILES["imgcomic"]["type"]=="image/png"){
	    # si exsite la carpeta o se ha creado
             if(file_exists($carpetaDestino) || mkdir($carpetaDestino)){

                $origen=$_FILES["imgcomic"]["tmp_name"];
                $destino=$carpetaDestino.$_FILES["imgcomic"]["name"];

		# movemos el archivo
                if(move_uploaded_file($origen, $destino)){
                    header("Location: index.php");
				}
				else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["imgcomic"]["name"];
                }
            }
           else{
                    echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
                }
		
        }
        else{
            echo "<br>".$_FILES["imgcomic"]["name"]." - NO es imagen jpg, png o gif";
        }
    
    }
    else{
        echo "<br>No se ha subido ninguna imagen";
    }
	}	

}
?>
