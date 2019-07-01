<!DOCTYPE html>
<html>
<head>
	<title>Ventas SIC | Inicio</title>
<?php
include('FredyNav2.php')
?>
</head>
<body>
	<div id="datos">
	<div class="row">
		  <div class="carousel carousel-slider  hide-on-small-only">
		    <a class="carousel-item" href="#"><img style="height: 300px;" src="img/4.jpg">
  			</a>
		   <!-- <a class="carousel-item" href="#"><img style="height: 300px;" src="img/2.jpg">
  			</a>
		    <a class="carousel-item" href="#"><img style="height: 300px;" src="img/3.jpg">
  			</a>
		    <a class="carousel-item" href="#"><img style="height: 300px;" src="img/1.jpg">
  			</a>-->
  			</div>
  			<div class="carousel carousel-slider  hide-on-med-and-up">
		    <a class="carousel-item" href="#"><img style="height: 130px;" src="img/4.jpg">
  			</a>
		    <!--<a class="carousel-item" href="#"><img style="height: 130px;" src="img/2.jpg">
  			</a>
		    <a class="carousel-item" href="#"><img style="height: 130px;" src="img/3.jpg">
  			</a>
		    <a class="carousel-item" href="#"><img style="height: 130px;" src="img/1.jpg">
  			</a>-->
  		</div>
	</div>
	<div class="row container"><h3>Ultimas ofertas</h3></div>
	<div class="row">
	  <div class="col s12">
	  	<div class="row">
		  <div class="hide-on-small-only col s1"><br></div>
		  <?php 
		  	include ('../php/conexion.php');
		  	$sql = mysqli_query($conn, "SELECT * FROM productos ORDER BY id_producto DESC LIMIT 5 ");
		  	while ($producto = mysqli_fetch_array($sql)) {
		  	?>
                  <div class="col s10 m2 l2 hide-on-small-only">
		      <div class="card">
		        <div  class="card-image">
		          <a href="../views/detalle_producto.php?id=<?php echo $producto['id_producto']; ?>"><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>"></a>
		        </div>
		        <div class="card-content">
		          <a href="../views/detalle_producto.php?id=<?php echo $producto['id_producto']; ?>" class="black-text">
		          <h5 >$ <?php echo $producto['precio']; ?>.00 MXN</h5>
		          <p><?php echo $producto['nombre']; ?>.</p>
		          </a>
		        </div>
		      </div>
		    </div>
          <div class="row hide-on-med-and-up ">
		  <div class="col s1"><br></div>
		  <div class="col s10 m2 l2">
		      <div class="card">
		        <div  class="card-image">
		          <a href="../views/detalle_producto.php?id=<?php echo $producto['id_producto']; ?>"><img height="210px" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>"></a>
		        </div>
		        <div class="card-content">
		          <a href="../views/detalle_producto.php?id=<?php echo $producto['id_producto']; ?>" class="black-text">
		          <h5 >$ <?php echo $producto['precio']; ?>.00 MXN</h5>
		          <p><?php echo $producto['nombre']; ?>.</p>
		          </a>
		        </div>
		      </div>
		    </div>
            <div class="col s1"><br></div>
            </div>
		    <?php
		  	}
		  	?>
	  	</div>	  	
	  </div>		
	</div>
<?php
include('footer.php')
?>
</div>
</body>
</html>