<!DOCTYPE html>
<html>
<head>
	<title>Ventas SIC | Productos</title>
<?php
include('FredyNav2.php');
include('../php/conexion.php');
$sql= mysqli_query($conn, "SELECT * FROM productos");
$filas = mysqli_num_rows($sql);
$Residuo = $filas%3;
$Filas_pagina=($filas-$Residuo)/3;
if ($Residuo == 0) {
	$Filas_pagina--;
}
?>

</head>
<body class="grey lighten-2">
	<div id="datos">
	<div class="row">
	<!-- Columna de la izquierda motrar contendido -->
	<div class="hide-on-small-only	col m3 l3">
	  <div class="row">
		<div class="col m2 l2"><br></div>
		<div class="col m9 l9">
		 <br><br>
		<h5>Nombre de la categoria</h5>

		<br>Algo de no se que<br>
		Elacen1<br>
		Enlace 2<br>
		-cosas nuevas<br><br><br>
		 Ver mas +
		</div>
	  </div>
	</div>
	<!-- Columna de la derecha motrar productos -->
	<div class="col s12 m8 l8"><br>
	  <?php 
	  for ($i=0; $i <=$Filas_pagina; $i++) {
	  	$inicia=$i*3; 
	  	$productos = mysqli_query($conn, "SELECT * FROM productos LIMIT $inicia,3");
	  ?>
		<div class="row">
		<?php
		while ($producto = mysqli_fetch_array($productos)) {
		?>
		  <div class="col s12 m4 l4">
		  	<div class="card">
		        <div  class="card-image">
		          <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>">
		        </div>
		        <div class="card-content">
		          <h5>$<?php echo $producto['precio']; ?>.00 MXN</h5>
		          	<p><?php echo $producto['descripcion']; ?>.</p>
		        </div>
		        <div class="card-action">
		          <a href="#">Ver Más</a>
		        </div>
		      </div>
		    </div>
		<?php
		}
		?>			
		</div>
	  <?php
	  }
	  ?>
		
</div>		
</body>
</html>