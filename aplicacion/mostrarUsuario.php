<?php
	require_once('configuracion/conexion.php');
	require_once('modelos/producto.php');

	$usuario = usuario::all();
	
	require_once("layout/header.php");
?>
<h1>Listado de usuarios</h1>

	<p>
		<a href="crearUsuario.php" class="btn btn-primary">Crear Nuevo Usuario</a>
	</p>

	<table border="1" class="table">
			<thead class="thead-dark">
				<tr align="center">
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Opciones</th>
				</tr>
			</thead>
		<?php
			
			foreach($usuario as $usuario){
				echo "<tr align='center'>";
				echo "<td>". $usuario->id ."</td>";
				echo "<td>".$usuario->nombre."</td>";
				echo "<td>".$usuario->email."</td>";
				echo "<td>".$usuario->direccion."</td>";
				echo "<td>".$usuario->telefono."</td>";
				echo "<td>";
				echo "<a href='editarUsuario.php/?id=". $usuario->id ."'> <i class='fas fa-pencil-alt'></i> </a>";
				echo "<a href='eliminarUsuario.php/?id=". $usuario->id ."'> <i class='fas fa-trash-alt'></i> </a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>

<?php
	require_once("layout/footer.php");
?>