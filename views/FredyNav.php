<?php

include('../php/conexion.php');

?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Import material-icons.css-->
      <link href="css/material-icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
      <style rel="stylesheet">
		.dropdown-content{  overflow: visible;	}
	</style>
	<div class="navbar-fixed">
	<nav class="indigo darken-4">
		<div class="nav-wrapper container">
			<a  class="brand-logo"><img  class="responsive-img" style="width: 60px; height: 56px;" src="img/logo_menu.jpg"></a>
			<a href="#" data-target="menu-responsive" class="sidenav-trigger">
				<i class="material-icons">menu</i>
			</a>
			<ul class="right hide-on-med-and-down">
				
				<li><a href="home.php"><i class="material-icons left">home</i>Home</a></li>

				<li><a class='dropdown-button' data-target='dropdown3'><i class="material-icons left">apps</i>Productos <i class="material-icons right">arrow_drop_down</i></a></li>
				<ul id='dropdown3' class='dropdown-content'>
				    <li><a href="lista_productos.php" class="black-text"> <i class="material-icons">list</i>Productos </a></li>
				    <li><a href="form_productos.php" class="black-text"><i class="material-icons">add</i>Agregar</a></li>
 				 </ul>
 				 <li><a class='dropdown-button' data-target='dropdown4'> <i class="material-icons right">arrow_drop_down</i> <i class="material-icons right">face</i> .</a></li>
				<ul id='dropdown4' class='dropdown-content'>
				    <li><a href="../php/cerrar_sesion.php" class="black-text"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
 				 </ul>
			</ul>
			<ul class="right hide-on-large-only hide-on-small-only">
				 <li><a class='dropdown-button' data-target='dropdown10'> <i class="material-icons right">arrow_drop_down</i> <i class="material-icons right">face</i> .</a></li>
				<ul id='dropdown10' class='dropdown-content'>
				    <li><a href="../php/cerrar_sesion.php" class="black-text"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
 				 </ul>
			</ul>
			<ul class="right hide-on-med-and-up">
		        <li><a class='dropdown-button' data-target='dropdown8'><i class="material-icons left">account_circle</i><b>></b></a></li>
				<ul id='dropdown8' class='dropdown-content'>
				   <li><a href="../php/cerrar_sesion.php" class="black-text"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
 				</ul>
		    </ul>			
		</div>		
	</nav>
	</div>
	<ul class="sidenav indigo lighten-5" id="menu-responsive" style="width: 270px;">
				<h2>Menú</h2>
    			<li><div class="divider"></div></li>
    			<br>
    			<li><a href="home.php"><i class="material-icons left">home</i>Home</a></li>
				<li>
	    			<ul class="collapsible collapsible-accordion">				
	    				<li>
	    				  <div class="collapsible-header"><i class="material-icons">apps</i>Productos <i class="material-icons right">arrow_drop_down</i></div>
		      				<div class="collapsible-body  indigo lighten-5">
		      				  <span>
		      					<ul>
		      					  <li><a href="lista_productos.php"><i class="material-icons">list</i>Productos</a></li>
			      				  <li><a href="form_productos.php"><i class="material-icons">add</i>Agregar</a></li>	
					    		</ul>
					          </span>
		      			  </div>    			
	    				</li>	    			
	    			</ul>	     				
	    		</li>
	</ul>
	<?php 
	include('../php/scripts.php');
	?>
	<script src="js/jquery-3.1.1.js"></script>
	<!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
    	$(document).ready(function() {
	    
	 	});
	 	$('.dropdown-button').dropdown({
	      	  inDuration: 500,
	          outDuration: 500, constrainWidth: false, // Does not change width of dropdown to that of the activator
	          coverTrigger: false, 
	    });
	    $('.dropdown-btn').dropdown({
	      	  inDuration: 500,
	          outDuration: 500,
	          hover: true,
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
	</script>
