<?php 
session_start();


//print $_SESSION['tipo'];
//if(isset( $_SESSION['usuario'])){
//			echo "<h1>a</h1>";
//}
//include "conexion.php";
//var_dump ($_POST);
print_r ($_FILES);



//var_dump ($_SESSION);


/*include "conexion.php";
$sqlEdit= "select * from editoriales;";
$edit= consulta($sqlEdit);
echo $edit[0]['id_editorial'];
echo $edit[0]['nombre'];*/

    # definimos la carpeta destino
    $carpetaDestino="img_comics/";
# si hay algun archivo que subir *
#
//echo $_FILES["imgcomic"]["tmp_name"];

    if(isset($_FILES["imgcomic"]) && $_FILES["imgcomic"]["name"]){
        # recorremos todos los arhivos que se han subido
	    # si es un formato de imagen
        if($_FILES["imgcomic"]["type"]=="image/jpeg" || $_FILES["imgcomic"]["type"]=="image/pjpeg" || $_FILES["imgcomic"]["type"]=="image/gif" || $_FILES["imgcomic"]["type"]=="image/png"){
	    # si exsite la carpeta o se ha creado
             if(file_exists($carpetaDestino) || mkdir($carpetaDestino)){

                $origen=$_FILES["imgcomic"]["tmp_name"];
                $destino=$carpetaDestino.$_FILES["imgcomic"]["name"];

		# movemos el archivo
                if(move_uploaded_file($origen, $destino)){
                    echo "<br>".$_FILES["imgcomic"]["name"]." movido correctamente";
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
?>
