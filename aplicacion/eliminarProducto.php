<?php
	require_once("configuracion/conexion.php");
	require_once("modelos/producto.php");

	$id = $_GET['id'];
	
	Producto::destroy($id);

	header('Location: ../mostrarProductos.php');
?>