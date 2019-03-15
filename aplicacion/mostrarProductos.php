<?php
	require_once('configuracion/conexion.php');
	require_once('modelos/producto.php');

	$productos = Producto::all();
	
	require_once("layout/header.php");
?>

	<h1>Listado de Productos</h1>

	<p>
		<a href="crearProducto.php" class="btn btn-primary">Crear Nuevo Producto</a>
	</p>

	<table border="1" class="table">
			<thead class="thead-dark">
				<tr align="center">
					<th>ID</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Opciones</th>
				</tr>
			</thead>
		<?php
			
			foreach($productos as $producto){
				echo "<tr align='center'>";
				echo "<td>". $producto->id ."</td>";
				echo "<td>".$producto->nombre."</td>";
				echo "<td>".$producto->precio."</td>";
				echo "<td>".$producto->cantidad."</td>";
				echo "<td>";
				echo "<a href='editarProducto.php/?id=". $producto->id ."'> <i class='fas fa-pencil-alt'></i> </a>";
				echo "<a href='eliminarProducto.php/?id=". $producto->id ."'> <i class='fas fa-trash-alt'></i> </a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>

<?php
	require_once("layout/footer.php");
?>