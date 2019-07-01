<!DOCTYPE html>
<html>
<head>
	<title>SIC | Productos</title>
<?php
include ('../php/conexion.php');
include ('FredyNav2.php');
$cat = $_GET['cat'];
$fitro = $_GET['f'];
$sql= mysqli_query($conn, "SELECT * FROM productos WHERE categoria = '$cat'");
$filas = mysqli_num_rows($sql);

$Residuo = $filas%3;
$Filas_pagina=($filas-$Residuo)/3;
if ($Residuo == 0) {
	$Filas_pagina--;
}

?>
</head>
<body>
<div class="grey lighten-2" id="datos">
	<div class="row">
	<!-- Columna de la izquierda motrar contendido -->
	<div class="hide-on-small-only	col m3 l3">
	  <div class="row">
		<div class="col m2 l2"><br></div>
		<div class="col m9 l9">
		 <br><br> 
		<h5>Categoria: <br><?php echo $cat; ?></h5>

		<br><b>Filtrar por:</b><br><br>
		<a href="categoria.php?cat=<?php echo $cat; ?>&f=Precio" class="black-text">Precio <i class="tiny material-icons rigth">attach_money</i></a><br><a href="categoria.php?cat=<?php echo $cat; ?>&f=New" class="black-text">
		Lo mas nuevo <i class="tiny material-icons rigth">local_offer</i></a><br>
		<br><br>
		<b>Pagos:</b><br><br>
		<div class="center  row col s10">
			<img height="30px" src="img/cash.png">
			<img height="30px" src="img/visa-mastercard.png">
		</div><br><br><br><br>

		<b>Otras categorias:</b>
		<?php
		$Compu_list = array("Accesorios Computo", "Laptops", "Moviles y Accesorios");
		$Impre_list = array("Impresoras", "Consumibles Impresora", "Accesorios Impresora y Otros");
		if (in_array ($cat, $Impre_list)) {
			echo "<br><br><a href='categoria.php?cat=Impresoras&f=' class='black-text'>Impresoras</a><br><br><a href='categoria.php?cat=Consumibles Impresora&f=' class='black-text'>Consumibles Impresora</a><br><br><a href='categoria.php?cat=Accesorios Impresora y Otros&f=' class='black-text'>Accesorios Impresora y Otros</a>";
					
		}else if (in_array($cat, $Compu_list)) {
			echo "<br><br><a href='categoria.php?cat=Accesorios Computo&f=' class='black-text'>Accesorios Computo</a><br><br><a href='categoria.php?cat=Laptops&f=' class='black-text'>Laptops</a><br><br><a href='categoria.php?cat=Moviles y Accesorios&f=' class='black-text'>Moviles y Accesorios</a>";
		}else{
			echo "<br><br><a href='categoria.php?cat=Camaras Ip&f=' class='black-text'>Camaras Ip</a><br><br><a href='categoria.php?cat=Camaras PTZ&f=' class='black-text'>Camaras PTZ</a><br><br><a href='categoria.php?cat=Kit Instalación&f=' class='black-text'>Kit Instalación</a>";
		}
		?>
		</div>
	  </div>
	</div>
	<!-- Columna de la derecha motrar productos -->
	<div class="col s12 m8 l8"><br>
	  <?php 
	  if ($filas <= 0) {
	    echo "<br><br><br><div class = 'center'><h3>No se encontro el resultado que buscaba, intente con algo mas.</h3></div><br>";
		}else{
	  for ($i=0; $i <=$Filas_pagina; $i++) {
		$inicia=$i*3; 
		$productos = mysqli_query($conn, "SELECT * FROM productos WHERE categoria = '$cat' LIMIT $inicia,3");
	  ?>
		<div class="row">
		<?php
		while ($producto = mysqli_fetch_array($productos)) {
		?>
		  <div class="col s12 m4 l4">
			  <div class="card">
				<div  class="card-image">
				  <a href="../views/detalle_producto.php?id=<?php echo $producto['id_producto']; ?>"><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>"></a>
				</div>
				<div class="card-content">
				  <a href="../views/detalle_producto.php?id=<?php echo $producto['id_producto']; ?>" class="black-text">
				  <h5 >$ <?php echo $producto['precio']; ?>.00 MXN</h5>
				  <p><?php echo $producto['nombre']; ?></p>
				  </a>
				</div>
			  </div>
			</div>
		<?php
		}
		?>			
		</div>
	  <?php
	  }
	}
	  ?>
</div>
</body>
</html>