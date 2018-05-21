<?php
session_start();

$id_articulo= $_POST['id_articulo'];
$cantidad = $_POST['cantidad'];
array_push($_SESSION["compras"], $id_articulo, $cantidad);




?>