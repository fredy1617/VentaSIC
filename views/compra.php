<!DOCTYPE html>
<html>
<head>
	<title>Ventas SIC | Compra</title>
<?php
include ('FredyNav2.php');
include('../php/conexion.php');

$id = $_GET['id'];
$Producto = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM productos WHERE id_producto = '$id' "));
?>
</head>
<body>
	
	<div id="datos">
	<div class="container">
	  <div class="row"><br>
		  <div class="col s12 m7 l7 grey lighten-1">
		  	<br><br class="hide-on-small-only "><br class="hide-on-small-only ">
		  	<div class="row">
			  	<div class="col s12 m12 l4">
			  		<img class="z-depth-4 hide-on-small-only" width="150px" height="145px" src="data:image/jpg;base64,<?php echo base64_encode($Producto['imagen']); ?>">
			  		<img class="z-depth-4 hide-on-med-and-up center" width="220px" height="200px" src="data:image/jpg;base64,<?php echo base64_encode($Producto['imagen']); ?>">
			  	</div>
			  	<!-- mitad -->
			  	<div class="col s12 m12 l8">
			  		<h6 ><b> <?php echo $Producto['nombre']; ?></b></h6>
			  		<h5 class="indigo-text"><b> $<?php echo $Producto['precio']; ?>.00</b></h5>
			  		<div class="center  row col s10">
						<img height="30px" src="img/cash.png">
						<img height="30px" src="img/visa-mastercard.png">
					</div>
			  </div>		  		
		  	</div><br class="hide-on-small-only ">
		  	<div class="center row">
		  		<div class="hide-on-small-only col s12 m1 l1"><br></div>
			  	
			  	<h6 class="col s12 m10 l10 pink-text "><i class="material-icons prefix  pink-text left">info</i>Para la realización de su compra o alguna aclaración comuníquese a cualquiera de nuestros contactos o visítenos en nuestras oficinas.</h6>
		  		
		  	</div><br>
		  	
		  	<div class="hide-on-med-and-up center">
		  		<b>Servicios Integrales de Computación</b><br>
		  		<i class="material-icons Small">videocam</i><i class="material-icons Small">laptop</i><i class="material-icons Small">print</i><i class="material-icons Small">router</i><i class="material-icons Small">devices_other</i><br><br><br>
		  	</div>
		  	<div class="col s12 center hide-on-small-only">
		  		<i class="material-icons medium">videocam</i><i class="material-icons medium">laptop</i><i class="material-icons medium">print</i><i class="material-icons medium">router</i><i class="material-icons medium">devices_other</i><br><br>
		  	</div>
		  	<br class="hide-on-small-only ">
		  </div>
		  <div class="hide-on-med-and-up"><div class="row"><br></div></div>
		  <div class="col s12 m5 l5">
		  	<div class="col s12 pink lighten-1">
		  	  <h4 class="center ">Información:</h4>
		  	  <h5><i class="material-icons">location_on</i> Dirección:</h5>
		  		<p><i class="material-icons hide-on-small-only">red</i>Av. Hidalgo #508 Col. Centro.</p>
		  	  <h5><i class="material-icons">email</i> E- mail:</h5>
		  		<p><i class="material-icons">red</i>sic.som@hotmail.com</p>
		  	  <h5><i class="material-icons">chat</i> Whatsapp:</h5>
		  		<p><i class="material-icons">red</i>433 935 6286</p>
		  	  <h5><i class="material-icons">public</i> Facebook:</h5>
		  		<p><i class="material-icons hide-on-small-only">red</i><a href="https://www.facebook.com/SIC.SOMBRERETE" target="blank" class="black-text">Servicios integrales de computación</a></p>
		  		<br>
		  	</div>
		  </div>
	  </div>
	  <div class="row">
	  	<div class="col s12 grey lighten-2"><br>
		  <h4 class="pink-text center hide-on-small-only">LLamanos Al: 433 935 6286 y 433 935 6288 </h4>
		  <h5 class="pink-text center hide-on-med-and-up">LLamanos Al: 433 935 6286 y 433 935 6288 </h5>
		  <p class="center"><b>Estamos a su ordenes en un horario corrido de 9:30am a 8:00pm de lunes a viernes, los sabados de 10:00am a 3:00pm y domingos de 11:00am a 3:00pm.</b></p>
		<br><br></div>
	  
	  </div>
	</div>
	</div>
</body>
</html>