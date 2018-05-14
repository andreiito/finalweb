<?php
//Permite establecer conexion al manejador de bases de datos:

if($_SESSION['tipo']=='cliente'){
	function consulta($consulta){
		$con = pg_connect("host=127.0.0.1 port=5432 dbname=tienda user=clientetienda password=holamundo") or die("No se puede establecer conexion a la BD");
		$query = pg_query($con,$consulta);	
		$resp = pg_fetch_all($query);
		return $resp;
	}
}
if($_SESSION['tipo']=='admin'){
	function consulta($consulta){
		$con = pg_connect("host=127.0.0.1 port=5432 dbname=tienda user=admintienda password=holamundo") or die("No se puede establecer conexion a la BD");
		$query = pg_query($con,$consulta);	
		$resp = pg_fetch_all($query);
		return $resp;
	}
	function edit($ed){
		$con = pg_connect("host=127.0.0.1 port=5432 dbname=tienda user=admintienda password=holamundo") or die("No se puede establecer conexion a la BD");
		$query = pg_query($con,$ed);
		return $query;
	}	

}
if($_SESSION['tipo']=='venta'){
	function consulta($consulta){
		$con = pg_connect("host=127.0.0.1 port=5432 dbname=tienda user=ventatienda password=holamundo") or die("No se puede establecer conexion a la BD");
		$query = pg_query($con,$consulta);	
		$resp = pg_fetch_all($query);
		return $resp;
	}
}
if(!$_SESSION['usuario']){
	function consulta($consulta){
		$con = pg_connect("host=127.0.0.1 port=5432 dbname=tienda user=clientetienda password=holamundo") or die("No se puede establecer conexion a la BD");
		$query = pg_query($con,$consulta);	
		$resp = pg_fetch_all($query);
		return $resp;
	}
}
?>
