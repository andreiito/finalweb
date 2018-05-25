<?php
session_start();
if($_SESSION['tipo']=='cliente'){
	header ("location: index.php");
}
?>