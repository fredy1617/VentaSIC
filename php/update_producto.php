<?php
include('../php/conexion.php');
include 'scripts.php';

$Tiene = $_FILES['Imagen']['tmp_name'];
$Nombre = $_POST['nombre'];
$Cantidad = $_POST['cantidad'];
$Precio = $_POST['precio'];
$Descripcion = $_POST['descripcion'];
$id_producto = $_POST['id_producto'];
$Categoria = $_POST['categoria'];
$Oferta = $_POST['oferta'];

if ($Tiene != "") {
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	$Insert = ", imagen = '$Imagen'";
}else{
	$Insert = "";
}
$sql = "UPDATE productos SET nombre = '$Nombre', cantidad = '$Cantidad', precio = '$Precio', descripcion = '$Descripcion'".$Insert.", categoria = '$Categoria', oferta = '$Oferta' WHERE id_producto = '$id_producto'";
if (mysqli_query($conn, $sql)) {

	echo "Se actualizó correctamente.";
	?>
	<script>
		var a = document.createElement("a");
			a.href = "../views/lista_productos.php";
			a.click();
	</script>
	<?php
}else{
	echo 'Ocurrio un error al actualizar: <a href="../views/lista_productos.php">Ir a lista de productos.</a>';

}
?>