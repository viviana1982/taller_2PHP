<?php 

	require_once("configuracion/conexion.php");
	require_once("modelos/producto.php");
	require_once("layout/header.php");

if(!empty($_POST)){
		$nombre = $_POST['nombre'];
		$Email = $_POST['Email'];
		$Direccion = $_POST['Direccion'];
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


 <form action="crearUsuario.php" method="POST">
  		<div class="form-group">
    		<label>Nombre</label>
    		<input type="text" name="nombre" class="form-control" placeholder="Nombre usuario ">
  		</div>
  		<div class="form-group">
    		<label>Email</label>
    		<input type="Email" name="Email" class="form-control" placeholder="Email">
  		</div>
  		<div class="form-group">
    		<label>Direccion</label>
    		<input type="text" name="Direccion" class="form-control" placeholder="Direccion">
  		</div>
  		<div class="form-group">
    		<label>Telefono</label>
    		<input type="number" name="Telefono" class="form-control" placeholder="Telefono">
  		</div>
  		<button type="submit" class="btn btn-primary">Crear usuario</button>
	</form>

	<?php
		require_once("layout/footer.php");	
	?>

