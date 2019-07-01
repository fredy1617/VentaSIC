<?php
include ('conexion.php');

$IdProducto = $conn->real_escape_string($_POST['valorIdProducto']);
if (mysqli_query($conn, "DELETE FROM productos WHERE id_producto = '$IdProducto'")) {
	echo '<script>M.toast({html: "Producto Borrado.", classes: "rounded"});</script>';
	?>
	  <script>    
	    var a = document.createElement("a");
	      a.href = "../views/lista_productos.php";
	      a.click();
	  </script>
	<?php
}else{
	echo '<script>M.toast({html: "Ocurrio un error.", classes: "rounded"});</script>';
}
?>