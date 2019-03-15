<?php
	require_once("configuracion/conexion.php");
	require_once("modelos/producto.php");

	$id = $_GET['id'];
	
	usuario::destroy($id);

	header('Location: ../mostrarUsuario.php');
?>