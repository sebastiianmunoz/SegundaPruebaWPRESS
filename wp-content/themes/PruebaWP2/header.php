<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>

  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <?php
    	$custom_logo_id = get_theme_mod( 'custom_logo' );
    	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>

    	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">

          <img src="<?php echo $logo[0]; ?>" width="500" height="100" class="d-inline-block" alt="">
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Welcome">Bienvenido</a>
			      		</li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Restaurant">Restaurant</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Menu">Menu</a>
					    </li>

					    <li class="nav-item">
					    	<a class="nav-link" href="#Reservation">Reserva</a>
					    </li>
					  <!--  <li class="nav-item">
					    	<a class="nav-link" href="#OurLocation">Our Location</a>
					    </li>
					    <li class="nav-item">
					    	<a href="it/index.html" class="language" rel="it-IT"><img src="images/italy.ico" class="flag" alt="Italiano" /></a>
					    	<a href="index.html" class="language" rel="en-En"><img src="images/english.ico" class="flag" alt="English" /></a>
					    </li>-->
				    </ul>
				</div>
			</nav>
