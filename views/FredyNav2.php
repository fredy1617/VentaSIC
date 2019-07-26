<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--Import material-icons.css-->
<link href="css/material-icons.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="../img/logo.jpg" type="image/jpg" />
<style rel="stylesheet">
	.dropdown-content{
	 overflow: visible;
	}
</style>
<script>
	function buscar(){
		var texto = $("input#busqueda").val();
		if (texto == "") {
			var texto = $("input#busqueda2").val();
		}

		$.post("../views/Productos.php", {
			texto: texto,
		}, function(mensaje){
			$("#datos").html(mensaje);
		});
	};
</script>

<!--PRIMER 1er NAVEGADOR DONDE ESTA EL BUSCADOR-->
<div class="navbar-fixed">
	<nav class="indigo darken-1">
	    <div class="nav-wrapper container">
	    	<!--LOGOTIPO-->
	      <a class=" hide-on-med-and-down brand-logo" href="home.php"><img style="width: 65px; height: 62px;" src="img/logo_menu.jpg"></a>
	      <ul class="hide-on-large-only hide-on-small-only left" >
	      	<a href="home.php"><img  style="width: 65px; height: 62px;"  src="img/logo_menu.jpg"></a>
	      </ul>
	      <ul class="hide-on-med-and-up left">
	      	<a href="home.php"><img style="width: 52px; height: 53px;" src="img/logo_menu.jpg"></a>
	      </ul>
		  <ul class="right hide-on-med-and-down">
	        <li><a href="contacto.php"><i class="material-icons left">contacts</i>Contacto</a></li>
	        <li><a href="login.php"><i class="material-icons left">face</i></a></li>
	      </ul>
	      <a data-target="menu-responsive" class="sidenav-trigger right hide-on-large-only">
				<i class="material-icons ">menu</i>
		  </a>
	      <ul class="right hide-on-med-and-up">
	      	<!--BUSCADOR movil-->
	      <li>
			<a style="width: 165px">
				<div class="input-field">
		          <input class="white" id="busqueda2" name="busqueda2" type="text"  placeholder=" Buscar Productos.." onkeyup="buscar();">
		        </div>
		    </a>
		  </li>
		  </ul>
		  
	      <ul class="right hide-on-small-only">
	      	<!--BUSCADOR tablet, escritotio-->
	      <li>
			<a style="width: 365px">
				<div class="input-field">
				  <i class=" hide-on-med-and-down material-icons prefix">search</i>
		          <input class="white" id="busqueda" name="busqueda" type="text"  placeholder=" Buscar Productos.." onkeyup="buscar();">
		        </div>
		    </a>
		  </li>
		  </ul>
	    </div>
	</nav>
</div>
<!--SEGUNDO 2d NAVEGADOR TODAS LAS OPCIONES-->
<div class="navbar-fixed hide-on-med-and-down ">
	<nav class="indigo darken-4 ">
		<div class="nav-wrapper container">
			<ul class="right">
	      	<li><a class='dropdown-button' data-target='dropdown1'><i class="material-icons left">phonelink</i>Computación<i class="material-icons right">expand_more</i></a></li>
				<ul id='dropdown1' class='dropdown-content'>
				    <li><a href="categoria.php?cat=Accesorios Computo&f=" class="black-text"><i class="material-icons">mouse</i>Accesorios </a></li>
				    <li><a href="categoria.php?cat=Laptops&f=" class="black-text"><i class="material-icons">computer</i>Laptops </a></li>
				    <li><a href="categoria.php?cat=Moviles y Accesorios&f=" class="black-text"><i class="material-icons">devices_other</i>Moviles y Accesorios</a></li>				    
 				 </ul>
 			<li><a class='dropdown-button' data-target='dropdown2'><i class="material-icons left">videocam</i>VideoVigilancia<i class="material-icons right">expand_more</i></a></li>
				<ul id='dropdown2' class='dropdown-content'>
				    <li><a href="categoria.php?cat=Camaras Ip&f=" class="black-text"><i class="material-icons">videocam</i>Camaras Ip</a></li>
				    <li><a href="categoria.php?cat=Camaras PTZ&f=" class="black-text"><i class="material-icons">video_call</i>Cámara PTZ</a></li>
				    <li><a href="categoria.php?cat=Kit Instalación&f=" class="black-text"><i class="material-icons">settings_input_svideo</i>Kit de Instalación</a></li>
 				 </ul>
 			<li><a class='dropdown-button' data-target='dropdown3'><i class="material-icons left">print</i>Impresoras<i class="material-icons right">expand_more</i></a></li>
				<ul id='dropdown3' class='dropdown-content'>
				    <li><a href="categoria.php?cat=Impresoras&f=" class="black-text"><i class="material-icons">print</i>Impresoras</a></li>
				    <li><a href="categoria.php?cat=Consumibles Impresora&f=" class="black-text"><i class="material-icons">format_color_fill</i>Consumibles</a></li>
				    <li><a href="categoria.php?cat=Accesorios Impresora y Otros&f=" class="black-text"><i class="material-icons left">power</i>Accesorios</a></li>				    
 				 </ul>
 			
 			<li><a href="mantenimiento.php">Ayuda<i class="material-icons right">help_outline</i></a></li>
	      </ul>
		</div>
	</nav>
</div>

<!------------------Menu desplegable ----------------------->
	<ul class="sidenav indigo lighten-4" id="menu-responsive" style="width: 280px;"><br>
				<label class="grey-text">- - - - - - - - - - - - - </label>
				<img  style="width: 82px; height: 80px;" src="img/logo_menu.jpg">
				<label class="grey-text">- - - - - - - - - - - - - </label>
				<li>
	    			<ul class="collapsible collapsible-accordion">
	    				<li>
	    				  <div class="collapsible-header"><i class="material-icons">phonelink</i>Computación<i class="material-icons right">arrow_drop_down</i></div>
		      				<div class="collapsible-body  indigo lighten-5">
		      				  <span>
		      					<ul class="indigo lighten-4">
				                   <li><a href="categoria.php?cat=Accesorios Computo&f="><i class="material-icons">mouse</i>Accesorios </a></li>
				                   <li><a href="categoria.php?cat=Laptops&f="><i class="material-icons">computer</i>Laptops </a></li>
				                   <li><a href="categoria.php?cat=Moviles y Accesorios&f="><i class="material-icons">devices_other</i>Moviles y Accesorios</a>
					    		</ul>
					          </span>
		      			  </div>    					
	    				</li>	    				
	    			</ul>	     				
	    		</li>
				<li>
	    			<ul class="collapsible collapsible-accordion">
	    				<li>
	    				  <div class="collapsible-header"><i class="material-icons">videocam</i>VideoVigilanca<i class="material-icons right">arrow_drop_down</i></div> 
		      				<div class="collapsible-body  indigo lighten-5">
		      				  <span>
		      					<ul class="indigo lighten-4">            
		      						<li><a href="categoria.php?cat=Camaras Ip&f="><i class="material-icons">videocam</i>Camaras Ip</a></li>
				                    <li><a href="categoria.php?cat=Camaras PTZ&f="><i class="material-icons">video_call</i>Cámara PTZ</a></li>
				                    <li><a href="categoria.php?cat=Kit &f="><i class="material-icons">settings_input_svideo</i>Kit de Instalación</a></li>
					    		</ul>
					          </span>
		      			  </div>    					
	    				</li>	    				
	    			</ul>	     				
	    		</li>
				<li>
					<ul class="collapsible collapsible-accordion">
	    				<li>
	    				  <div class="collapsible-header"><i class="material-icons">print</i>Impresoras<i class="material-icons right">arrow_drop_down</i></div>
		      				<div class="collapsible-body  indigo lighten-5">
		      				  <span>
		      					<ul class="indigo lighten-4">     
		      						<li><a href="categoria.php?cat=Impresoras&f="><i class="material-icons">print</i>Impresoras</a></li>
				                    <li><a href="categoria.php?cat=Consumibles Impresora&f="><i class="material-icons">format_color_fill</i>Consumibles</a></li>
				                    <li><a href="categoria.php?cat=Accesorios Impresora y Otros&f="><i class="material-icons left">power</i>Accesorios</a></li>
								    
				 			</ul>
					          </span>
		      			  </div>    					
	    				</li>	    				
	    			</ul>	     				
	    		</li>	    		
    			<!------------------------------------->
    			
    			<!------------------------------------->
    			<li><div class="divider"></div></li>
    			<li><a href="contacto.php"><i class="material-icons left">contacts</i>Contacto</a></li>
    			<li><a href="mantenimiento.php"><i class="material-icons left">help_outline</i>Ayuda</a></li>
	                <li><a href="login.php"><i class="material-icons left">face</i>></a></li><br>
	</ul>

<script src="js/jquery-3.1.1.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    	$(document).ready(function() {
	    
	 	});
	 	$('.dropdown-button').dropdown({
	      	  inDuration: 500,
	          outDuration: 500,
	          constrainWidth: false, // Does not change width of dropdown to that of the activator
	          coverTrigger: false, 
	    });
		document.addEventListener('DOMContentLoaded', function(){
			M.AutoInit();
		});
		document.addEventListener('DOMContentLoaded', function() {
		    var elems = document.querySelectorAll('.fixed-action-btn');
		    var instances = M.FloatingActionButton.init(elems, {
		      direction: 'left'
		    });
		  });
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel.carousel-slider');
    var instances = M.Carousel.init(elems, {
		      fullWidth: true,
		      duration: 800,
		      indicators: true,
		    });
    setInterval(function(){
    	$('.carousel').carousel('next');
    },8000);
  });
</script>
