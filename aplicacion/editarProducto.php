<?php
	
	require_once("configuracion/conexion.php");
	require_once("modelos/producto.php");

	$id = $_GET['id'];

	$producto = Producto::findOrFail($id);

	if(!empty($_POST)){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];

		$producto = Producto::findOrFail($id);
		$producto->nombre = $nombre;
		$producto->precio = $precio;
		$producto->cantidad = $cantidad;
		$producto->save();

		header('Location: ../mostrarProductos.php');
	}	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>

	<h1>Editar Producto</h1>

<form action="../editarProducto.php/?id=<?php echo $producto->id ?>" method="POST">
	<input type="hidden" name="id" value="<?php echo $producto->id ?>">
  		<div class="form-group">
    		<label>Nombre Producto</label>
    		<input type="text" name="nombre" class="form-control" placeholder="Nombre Producto" value="<?php echo $producto->nombre ?>">
  		</div>
  		<div class="form-group">
    		<label>Precio Producto</label>
    		<input type="number" name="precio" class="form-control" placeholder="Precio Producto" value="<?php echo $producto->precio?>">
  		</div>
  		<div class="form-group">
    		<label>Cantidad Producto</label>
    		<input type="number" name="cantidad" class="form-control" placeholder="Cantidad Producto" value="<?php echo $producto->cantidad?>">
  		</div>
  		<button type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>

	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>