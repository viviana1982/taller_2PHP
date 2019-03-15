<?php
	
	require_once("configuracion/conexion.php");
	require_once("modelos/producto.php");

	$id = $_GET['id'];

	$usuario = usuario::findOrFail($id);

	if(!empty($_POST)){
		$nombre = $_POST['nombre'];
		$Email = $_POST['Email'];
		$Direccion = $_POST['direccion'];
		$Telefono = $_POST['Telefono'];
		

		$nuevo_usuario = new usuario();
		$nuevo_usuario->nombre = $nombre;
		$nuevo_usuario->email = $Email;
		$nuevo_usuario->direccion = $Direccion;
		$nuevo_usuario->telefono = $Telefono;
		$nuevo_usuario->save();
		
		header("Location: mostrarUsuario.php");

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

	<h1>Editar Usuario</h1>

<form action="../editarUsuario.php/?id=<?php echo $usuario->id ?>" method="POST">
	<input type="hidden" name="id" value="<?php echo $usuario->id ?>">
  		<div class="form-group">
    		<label>Nombre Usuario</label>
    		<input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario" value="<?php echo $usuario->nombre ?>">
  		</div>
  		<div class="form-group">
    		<label>Email Usuario</label>
    		<input type="Email" name="Email" class="form-control" placeholder="Email Usuario" value="<?php echo $usuario->email?>">
  		</div>
  		<div class="form-group">
    		<label> Direccion Usurio</label>
    		<input type="text" name="direccion" class="form-control" placeholder="Direccion Usuario" value="<?php echo $usuario->direccion?>">
  		</div>
  		<div class="form-group">
    		<label>Telefono Usurio</label>
    		<input type="number" name="telefono" class="form-control" placeholder="Telefono Usuario" value="<?php echo $usuario->telefono?>">
  		</div>
  		<button type="submit" class="btn btn-primary">Actualizar Usuario</button>
</form>

	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>