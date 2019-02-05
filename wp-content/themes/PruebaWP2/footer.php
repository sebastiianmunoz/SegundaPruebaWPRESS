<div class="row footer bg-light">
  <div class="col">
    <?php if ( is_active_sidebar( 'widget_footer' ) ) {
            dynamic_sidebar( 'widget_footer' );
            }; ?>
  </div>
  <div class="col">
    <h5 class="text-center">Telefono  : +56223454653<h5>
  </div>
  <div class="col">
    <h5 class="text-center">Direccion : Av. Colón 161 , Providencia <h5>
  </div>
</div>
</div>
<footer class="container">
  <div class= "row only-mobile">
    <div class="col-6">
      <a class="btn btn-primary btn-block text-center" href="tel:+355698889452"><i class="fa fa-phone" aria-hidden="true"></i> Call</a>
    </div>
    <div class="col-6">
      <a class="btn btn-success btn-block text-center" href="https://api.whatsapp.com/send?phone=+355698889452"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
