<?php 
session_start();


//print $_SESSION['tipo'];
//if(isset( $_SESSION['usuario'])){
//			echo "<h1>a</h1>";
//}
//include "conexion.php";
var_dump ($_POST);
var_dump ($_FILES);



//var_dump ($_SESSION);


/*include "conexion.php";
$sqlEdit= "select * from editoriales;";
$edit= consulta($sqlEdit);
echo $edit[0]['id_editorial'];
echo $edit[0]['nombre'];*/

    # definimos la carpeta destino
    $carpetaDestino="img_comic/";
    # si hay algun archivo que subir
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0]){
        # recorremos todos los arhivos que se han subido
        # si es un formato de imagen
        if($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"]=="image/pjpeg" || $_FILES["archivo"]["type"]=="image/gif" || $_FILES["archivo"]["type"]=="image/png"){
          # si exsite la carpeta o se ha creado
            if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
                $origen=$_FILES["archivo"]["tmp_name"][$i];
                $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
                # movemos el archivo
                if(@move_uploaded_file($origen, $destino)){
                    echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                }
                else{
                    echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                }
            }
            else{
                echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
            }
        }
        else{
            echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg, png o gif";
        }
    }

    else{
        echo "<br>No se ha subido ninguna imagen";
    }
?>
