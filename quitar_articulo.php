<?php
session_start();

$id_articulo= $_POST['id_articulo'];
$indice= array_search($id_articulo, $_SESSION['articulos']);
unset($_SESSION['articulos'][$indice]);




?>