<!DOCTYPE html>
<html>
<head>
	<title>Ventas SIC | Editar Productos</title>
<?php
include ('FredyNav.php');
$id_producto = $_POST['id_producto'];
$producto = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM productos WHERE id_producto=$id_producto"));
?>
</head>
<body>
	<div class="container"><br>
		<div class="row">
			<h3 class="hide-on-med-and-down">Editar Producto:</h3>	
			<h5 class="hide-on-large-only">Editar Producto:</h5>
		</div>
		<form action="../php/update_producto.php" method="POST" enctype="multipart/form-data">
		  <div class="row">
		  	<div class="col s4 m2 l2">
		  		<img height="100" width="100" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>" />
		  	</div>
			<div class="file-field input-field col s8 m4 l4">
				<div class="btn pink">
					<span>Imagen</span>
					<input type="file" name="Imagen">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>					
			</div>
			<div class="input-field col s12 m6 l6">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="nombre" name="nombre" type="text" class="validate" data-length="50" value="<?php echo $producto['nombre']; ?>" required>
	          <label for="nombre">Nombre:</label>
	        </div>			
			</div>
			<div class="row">
			<div class="input-field col s12 m6 l6">
			  <i class="material-icons prefix">attach_money</i>
			  <input type="number" name="precio" class="validate" data-length = "6" value="<?php echo $producto['precio']; ?>" required>
			  <label for = "precio">Precio:</label>
			</div>
			<div class="input-field col s12 m6 l6">
			  <i class="material-icons prefix">filter_3</i>
			  <input type="number" name="cantidad" class="validate" data-length="10" value="<?php echo $producto['cantidad']; ?>" required>
			  <label for="cantidad">Cantidad:</label>
			</div>
			<div class="input-field col s12 m6 l6">
			  <i class="material-icons prefix">insert_comment</i>
			  <textarea name="descripcion" class="materialize-textarea validate" data-length="100" required ><?php echo $producto['descripcion']; ?></textarea>
			  <label for="descripcion">Descripcion:</label>
			</div>
			<div class="input-field col s12 m6 l6" >
	          <i class="col s1"> <br></i>
	          <select id="categoria" name="categoria" class="browser-default col s10" required>
	            <option value="<?php echo $producto['categoria']; ?>" selected><?php echo $producto['categoria']; ?></option> 	         
	            <option value="Accesorios Computo">Accesorios Computo</option>
	            <option value="Laptops">Laptops</option>
	            <option value="Moviles y Accesorios">Moviles y Accesorios</option>               
	            <option value="Camaras Ip">Camaras Ip</option>               
	            <option value="Camaras PTZ">Camaras PTZ</option>               
	            <option value="Kit Instalación">Kit Instalación</option>               
	            <option value="Impresoras">Impresoras</option>               
	            <option value="Consumibles Impresora">Consumibles Impresora</option>             
	            <option value="Accesorios Impresora y Otros">Accesorios Impresora y Otros</option>             
	          </select>
	        </div>
		  </div>
		  <input id="id_producto" name="id_producto" type="hidden" value="<?php echo $producto['id_producto']; ?>">
		  <button class="btn waves-effect waves-light pink right" type="submit" name="action">Guardar
		  	<i class="material-icons right">send</i>
		  </button>
		</form>
	</div>
</body>
</html>