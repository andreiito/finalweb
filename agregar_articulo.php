<?php
session_start();

$id_articulo= $_POST['id_articulo'];
array_push($_SESSION["articulos"], $id_articulo);




?>
