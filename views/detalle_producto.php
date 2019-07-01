<!DOCTYPE html>
<html>
<head>
<?php
include('FredyNav2.php');
include('../php/conexion.php');
$id = $_GET['id'];
$Producto = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM productos WHERE id_producto = '$id' "));
?>
	<title>Ventas SIC |  <?php echo $Producto['nombre']; ?></title>
</head>
<body class="grey lighten-2">
	<div id="datos">
	<div class="container"><br><br>
	  <div class="row">
	  	<div class="col s12 m8 l8 grey lighten-5 hide-on-small-only"><br><br>
	  		<div class="center">
	  		  <img  height="450px" width="435px" src="data:image/jpg;base64,<?php echo base64_encode($Producto['imagen']); ?>">
	  		</div><br><br>
	  		<hr>
	  		<?php
	  		$categoria = $Producto['categoria'];
	  		$sql = mysqli_query($conn, "SELECT * FROM productos  WHERE categoria = '$categoria' AND id_producto != '$id' ORDER BY id_producto  LIMIT 3 ");
		  	while ($mas = mysqli_fetch_array($sql)){
		  	?>
	  		<div class="col s12 m4 l4">
		      <div class="card">
		        <div  class="card-image">
		          <a href="../views/detalle_producto.php?id=<?php echo $mas['id_producto']; ?>"><img height="190px" src="data:image/jpg;base64,<?php echo base64_encode($mas['imagen']); ?>"></a>
		        </div>
		        <div class="card-content">
		          <a href="../views/detalle_producto.php?id=<?php echo $mas['id_producto']; ?>">
		          <h6>$ <?php echo $mas['precio']; ?>.00 MXN</h6>
		          <p class="black-text"><?php echo $mas['nombre']; ?>.</p>
		          </a>
		        </div>
		      </div>
		    </div>
		    <?php
			}
			?>
	  	</div>
		<div class="col s12 m4 l4">
		  <div class="col s12 grey lighten-5">	
		  	<div class="hide-on-small-only">
		  	<h4><b><?php echo $Producto['nombre'];?></b></h4><br>
		  	<h3 class="right indigo-text">$<?php echo $Producto['precio']; ?>.00</h3><br><br>
		  	<br><br>
		    </div>
		    <div class="hide-on-med-and-up">
		    <div class="center">
	  		  <img  height="210px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($Producto['imagen']); ?>">
	  		</div><hr><br>
		  	<h5><b><?php echo $Producto['nombre'];?></b></h5>
		  	<h4 class="right indigo-text">$<?php echo $Producto['precio']; ?>.00</h4><br><br>
		  	<br><br>
		    </div>
		  	<p><b>Disponibles: <?php echo $Producto['cantidad'];?></b></p><br><br>
		  	<div class="center">
			<a href="../views/compra.php?id=<?php echo $id; ?>" class="waves-effect waves-light btn pink" >Comprar ahora</a>
			</div><br><br>
			<h5><b>Descripción:</b></h5>
		  	<h5 class="hide-on-small-only"><?php echo $Producto['descripcion']; ?></h5>
		  	<h6 class="hide-on-med-and-up"><?php echo $Producto['descripcion']; ?></h6>
			<br>
			<br>
			<br>
			<p class="indigo-text darken-2">Aceptamos tarjetas de credito y debito tambien pagos en efectivo:</p>
			<div class="center  row col s10">
				<img height="30px" src="img/visa-mastercard.png">
				<img height="30px" src="img/cash.png">
			</div><br><br><br><br>
		  </div> 
			
		</div>	
	  </div>
	</div>
	<?php
	include ('footer.php');
	?>
	</div>
</body>

</html>