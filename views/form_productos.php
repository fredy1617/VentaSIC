<!DOCTYPE html>
<html>
<head>
	<title>Ventas SIC | Agregar Producto</title>
<?php
include('FredyNav.php');
?>
</head>
<body>
	<div class="container"><br>
		<div class="row">
			<h3 class="hide-on-med-and-down">Agregar Producto:</h3>	
			<h5 class="hide-on-large-only">Agregar Producto:</h5>		
		</div>
	<form action="../php/insert_producto.php" method="POST" enctype="multipart/form-data">
		<div class="row">
	    <div class="file-field input-field col s12 m6 l6">
	      <div class="btn pink">
	        <span>Imagen</span>
	        <input type="file" name="Imagen" required>
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text">
	      </div>
	    </div>
	    <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombre" name="nombre" type="text" class="validate" data-length="50" required>
          <label for="nombre">Nombre:</label>
        </div>
        <div class="input-field col s12 m6 l6" >
          <i class="material-icons prefix">attach_money</i>
          <input id="precio" type="number" class="validate" data-length="6" name="precio" required>
          <label for="precio">Precio:</label>
        </div> 
        <div class="input-field col s12 m6 l6" >
          <i class="material-icons prefix">filter_3</i>
          <input id="cantidad" type="number" class="validate" data-length="10" name="cantidad" required>
          <label for="cantidad ">Cantidad:</label>
        </div> 
        <div class="input-field col s12 m6 l6" >
          <i class="material-icons prefix">location_on</i>
          <textarea id="descripcion" name="descripcion" class="
         materialize-textarea validate" data-length="100" required></textarea>
          <label for="descripcion">Descripcion:</label>
        </div>
        <div class="input-field col s8 m4 l4" >
          <i class="col s1"> <br></i>
          <select id="categoria" name="categoria" class="browser-default col s10" required>
            <option value="" selected>Seleccione la Categoria</option>            
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
        <div class="col s4 m2 l2"><br>
          <select id="oferta" name="oferta" class="browser-default col s10" required>
            <option value="" selected>Oferta!</option>            
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>
        </div>
	</div>
	  <button class="btn waves-effect waves-light pink right" type="submit" name="action">Guardar
	    <i class="material-icons right">send</i>
	  </button>
	  </form>	
	</div>
</body>
</html>