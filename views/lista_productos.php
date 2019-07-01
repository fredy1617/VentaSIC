<!DOCTYPE html>
<html>
<head>
	<title>Ventas SIC | Lista de Productos</title>
<?php
include('FredyNav.php');
?>
<script>
	function borrar_producto(IdProducto){
    $.post("../php/borrar_producto.php", { 
            valorIdProducto: IdProducto,
    }, function(mensaje) {
    $("#borrar_producto").html(mensaje);
    }); 
  };
</script>
</head>
<body>
	<div class="container">
		<div id="borrar_producto"></div>
		<div class="row">
			<h3 class="hide-on-med-and-down">Listado de Productos:</h3>	
			<h5 class="hide-on-large-only">Listado de Productos:</h5>		
		</div>
		<table>
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th width="30%">Descripcion</th>
					<th>Cantidad</th>
					<th>Precio C/U</th>
					<th>Categoria</th>
					<th>Editar</th>
					<th>Borrar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			include('../php/conexion.php');
			$sql = mysqli_query($conn, "SELECT * FROM productos");
			while ($datos = mysqli_fetch_array($sql)) {
			?>
				<tr>
					<td><img height="115" width="120" src="data:image/jpg;base64,<?php echo base64_encode($datos['imagen']); ?>" /></td>
					<td><?php echo $datos['nombre']; ?></td>
					<td><?php echo $datos['descripcion']; ?></td>
					<td><?php echo $datos['cantidad']; ?></td>	
					<td>$ <?php echo $datos['precio']; ?>.00</td>
					<td><?php echo $datos['categoria']; ?></td>
					<td><form method="post" action="../views/editar_producto.php"><input id="id_producto" name="id_producto" type="hidden" value="<?php echo $datos['id_producto']; ?>"><button class="btn btn-floating pink waves-effect waves-light"><i class="material-icons">edit</i></button></form></td>
					<td><a onclick="borrar_producto(<?php echo $datos['id_producto']; ?>);" class="btn btn-floating red darken-1 waves-effect waves-light"><i class="material-icons">delete</i></a></td>
				</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>