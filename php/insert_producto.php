<?php
include('../php/conexion.php');

$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$Nombre = $_POST['nombre'];
$Cantidad = $_POST['cantidad'];
$Precio = $_POST['precio'];
$Descripcion = $_POST['descripcion'];
$Categoria = $_POST['categoria'];
$Oferta = $_POST['oferta'];

if (mysqli_query($conn, "INSERT INTO productos (nombre, precio, cantidad, descripcion, imagen, categoria, oferta) VALUES ('$Nombre', '$Precio', '$Cantidad', '$Descripcion', '$Imagen', '$Categoria', '$Oferta')")) {
	?>
	<script>    
	    var a = document.createElement("a");
	      a.href = "../views/lista_productos.php";
	      a.click();
	</script>
	<?php
}else{
	echo "Ocurrio un error al insertar el producto.";
	?>
	<script>    
	    var a = document.createElement("a");
	      a.href = "../views/form_productos.php";
	      a.click();
	</script>
	<?php
}
?>