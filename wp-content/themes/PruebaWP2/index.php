<?php get_header() ?>
<!-- Header Section -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100 img-fluid img-slider" src="<?php echo get_template_directory_uri();?>/assets/images/slider1.jpg" alt="First slide">
        <div class="carousel-caption">
          <h2>Bienvenido!</h2>
        <p>...</p>
      </div>
      </div>
      <div class="carousel-item">
          <img class="d-block w-100 img-fluid img-slider" src="<?php echo get_template_directory_uri();?>/assets/images/slider2.jpg" alt="Second slide">
          <div class="carousel-caption">
          <h2>Tradicional Comida Italiana</h2>
        <p>...</p>
      </div>
    </div>
      <div class="carousel-item">
          <img class="d-block w-100 img-fluid img-slider" src="<?php echo get_template_directory_uri();?>/assets/images/slider3.jpg" alt="Third slide">
          <div class="carousel-caption">

      </div>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--- End of Carousel -->
<!--- Restaurant-->
<div class="container">
<div class="row" id="Restaurant">
    <div class="col navMenu">
      <h2 class="text-center" >~ Restaurant ~</h2>
    </div>
  </div>
  <div class="row bg-light" >
    <div class="col-md-6">
      <h3>Location</h3>
      <p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
      <h5>A Unique Experience</h5>
      <p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
    </div>
    <div class="col-md-6" data-aos="fade-up">
      <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/sitio/pasta.jpg">
    </div>
  </div>
  <div class="row bg-light"><br></div>
  <div class="row bg-light">
    <div class="col-md-6 order-md-1 order-2" data-aos="fade-up">
      <img class="img-fluid " src="<?php echo get_template_directory_uri();?>/assets/img/sitio/pizza.jpg">
    </div>
    <div class="col-md-6 order-md-12 order-1">
      <h3>Cuisine</h3>
      <p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
      <h5>A Unique Experience</h5>
      <p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
    </div>
  </div>
  <!--- End of Restaurant -->

  <!--- Start of Menu-->
<div class="row" id="Menu">
  <div class="col navMenu">
      <h2 class="text-center" >~ Menu ~</h2>
    <!--  <h3 class="text-center" > AntiPastos</h3>-->
  </div>
</div>


<div class="container">
  <div class="row">
  <div class="col-sm-12  grillagigante">


<?php
      $arg = array(
         // 'category_name' => 'ANTIPASTO',
              'post_type'		 => 'post_tipecarta',
              'posts_per_page' => 6

            );
           $get_arg = new WP_Query( $arg );
            while ( $get_arg->have_posts() ) {
              $get_arg->the_post();
            ?>
           <?php $imagen_del_plato = get_field( 'imagen_del_plato' ); ?>
                  <div class="col-sm-12 col-md-4">
                  <div class="thumbnail">
                    <img   class="img-fluid "src="<?php echo $imagen_del_plato['url']; ?>" >
                    <div class="caption grilla" style="text-align:center;">
                      <h4><?php the_field( 'nombre_del_plato' ); ?></h4>
                           <h5><?php the_field( 'descripcion_del_plato' ); ?></h5>
                      <h6>Precio.<?php the_field( 'precio_del_plato' ); ?></h6>
                  <!-- <a href="#" class="btn btn-default" role="button">Leer mas</a></p>-->
                    </div>
                  </div>
                </div>
             <?php } wp_reset_postdata();
          ?>






      </div>









<!--- End of Menu -->
<!--- Start of Reservation-->
<div class="row" id="Reservation">
  <div class="col navMenu">
      <h2 class="text-center">~ Reservation ~</h2>
      <?php echo do_shortcode(' [contact-form-7 id="23" title="Contact form 1"]') ?>
  </div>
</div>
<div class="row">


  <div class=" col-lg-12 reserve-container" data-aos="fade-up">
    <img class="img-fluid image-reserve" src="<?php echo get_template_directory_uri();?>/assets/images/reserve.jpg">
    <div class="reserve-text col-lg-12 ">
      <h1 class="text-center">Horarios</h1>
      <div class="row">
        <div class="col-6">
            <h2 class="text-center">Almuerzo</h2>
            <h5 class="text-center">12:00 - 15:00</h5>
        </div>
        <div class="col-6">
            <h2 class="text-center">Cena</h2>
            <h5 class="text-center">19:30 - 23:30</h5>
        </div>
      </div>
    </div>
  </div>


</div>
<!--<br>
<div class="row bg-light">
<div class="col">
    <form>
    < <div class="form-row">
          <div class="form-group col-6">
            <h3>Reserve</h3>
            <label for="inputDate"> Date</label>
            <input type="date" class="form-control" id="inputDate" placeholder="Data gg/mm/aaaa">
          </div>
          <div class="form-group col-6">
            <h3>Details</h3>
            <label for="inputName"> Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name">
          </div>
          <div class="form-group col-6">
            <label for="inputTime"> Timetables</label>
            <input type="time" class="form-control" id="inputTime" placeholder="Timetables">
          </div>
          <div class="form-group col-6">
            <label for="inputEmail"> Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
          <div class="form-group col-6">
            <label for="inputNumber"> Number of Guests</label>
            <input type="number" class="form-control" id="inputNumber" placeholder="Number of Guests">
          </div>
          <div class="form-group col-6">
            <label for="inputCel"> Phone</label>
            <input type="tel" class="form-control" id="inputCel" placeholder="Phone">
          </div>
          <div class="form-group col-12">
            <label for="inputComment"> Further requests</label>
          <textarea class="form-control" rows="4" id="inputComment" placeholder="Further requests"></textarea>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-secondary btn-block">Reserve</button>
          </div>
        </div>
    </form>


  </div>
</div>-->
<!--- End of Reserve -->
<!--- Start of Our Location -->
<!---
<div class="row" id="OurLocation">
  <div class="col navMenu">
    <h2 class="text-center">~ Our Location ~</h2>
  </div>
</div>
<div class="row">
  <div id="map" class="col-md-9 map"></div>
  <div class="col-md-3">
    <h3> Dirección:  </h3>
    <p>Av. Colon 161 , Providencia </p>
    <h3> Telefono: </h3>
    <p>+56223454653</p>

  </div>-->
<!--- </div>-->

<!--- End of Our Location -->

<?php get_footer() ?>
