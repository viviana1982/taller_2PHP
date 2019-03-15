<?php

	require_once("configuracion/conexion.php");
	require_once("modelos/producto.php");

	if(!empty($_POST)){
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];

		$nuevo_producto = new Producto();
		$nuevo_producto->nombre = $nombre;
		$nuevo_producto->precio = $precio;
		$nuevo_producto->cantidad = $cantidad;
		$nuevo_producto->save();

		header("Location: mostrarProductos.php");
	}

	require_once("layout/header.php");

?>


	<form action="crearProducto.php" method="POST">
  		<div class="form-group">
    		<label>Nombre Producto</label>
    		<input type="text" name="nombre" class="form-control" placeholder="Nombre Producto">
  		</div>
  		<div class="form-group">
    		<label>Precio Producto</label>
    		<input type="number" name="precio" class="form-control" placeholder="Precio Producto">
  		</div>
  		<div class="form-group">
    		<label>Cantidad Producto</label>
    		<input type="number" name="cantidad" class="form-control" placeholder="Cantidad Producto">
  		</div>
  		<button type="submit" class="btn btn-primary">Crear Producto</button>
	</form>

	<?php
		require_once("layout/footer.php");	
	?>
