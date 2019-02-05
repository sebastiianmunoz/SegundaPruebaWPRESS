<?php
  // REGISTRO DE ESTILOS

function register_enqueue_style() {

    $theme_data=wp_get_theme();

 /* Registrando estilos   get_theme_file_uri('/assets/stylesheets/styles.css'),*/
 wp_register_style('bootstap', get_theme_file_uri('/assets/css/bootstrap.min.css'),'null', '1.0', 'screen');

 wp_register_style('bootstap1', get_theme_file_uri('/assets/css/bootstrap-theme.min.css'),'null', '1.0', 'screen');

 wp_register_style('bootstap2', get_theme_file_uri('/assets/css/style.css'),'null', '1.0', 'screen');



 /* Estilos en cola */
 wp_enqueue_style('bootstap');
 wp_enqueue_style('bootstap1');
 wp_enqueue_style('bootstap2');


}



add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );


function register_enqueue_scripts() {

    $theme_data=wp_get_theme();

    wp_deregister_script('jquery');
   /*  wp_deregister_script('jquery-migrate');*/
  /* Registrando Scripts */


    wp_register_script('jQuery3', get_theme_file_uri('/assets/js/vendor/jquery-3.3.1.slim.min.js'), null, '3.2.1', true);
    wp_register_script('jquery-1', get_theme_file_uri('/assets/js/vendor/jquery-1.11.2.min.js'),null,'3.2.1', true);
    wp_register_script('modernizr', get_theme_file_uri('/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'), null, '3.2.1', true);
    wp_register_script('bootstrap.min.js', get_theme_file_uri('/assets/js/vendor/bootstrap.min.js'),null,'3.2.1', true);
    wp_register_script('image-effect.js', get_theme_file_uri('/assets/js/image-effect.js'), null, '3.2.1', true);
    wp_register_script('jquery-3.3.1.min.js', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'),null,'3.2.1', true);
    wp_register_script('main', get_theme_file_uri('/assets/js/main.js'),null,'3.2.1', true);
    wp_register_script('map', get_theme_file_uri('/assets/js/map.js'), null, '3.2.1', true);
    wp_register_script('plugins', get_theme_file_uri('/assets/js/plugins.js'), null, '3.2.1', true);

    wp_register_script('smooth-scroll.js', get_theme_file_uri('/assets/js/smooth-scroll.js'), null, '3.2.1', true);

    /* Enqueue Scripts */
    wp_enqueue_script('jQuery3');
    wp_enqueue_script('jquery-1');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('bootstrap.min.js');
    wp_enqueue_script('image-effect.js');
    wp_enqueue_script('jquery-3.3.1.min.js');
    wp_enqueue_script('main');
    wp_enqueue_script('map');
    wp_enqueue_script('plugins');
    wp_enqueue_script('smooth-scroll.js');

    //<!-- Scripts -->
    //<script src="js/vendor/jquery-3.3.1.slim.min.js"></script>
    //<script src="js/vendor/jquery-1.11.2.min.js"></script>
    //<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    //<script src="js/vendor/bootstrap.min.js"></script>
    //<script src="js/plugins.js"></script>
    //<script src="js/main.js"></script>


     }


     add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


    // FUNCION PARA AGREGAR MENUS
    if ( ! function_exists('post_tipe_carta') ) {

// Register Custom Post Type
function post_tipe_carta() {

	$labels = array(
		'name'                  => _x( 'cartas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'carta', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Carta', 'text_domain' ),
		'name_admin_bar'        => __( 'Carta', 'text_domain' ),
		'archives'              => __( 'Carta Archivos', 'text_domain' ),
		'attributes'            => __( 'Carta atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Carta Principal', 'text_domain' ),
		'all_items'             => __( 'Todas las Cartas', 'text_domain' ),
		'add_new_item'          => __( 'Agregar Nueva Carta', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo plato', 'text_domain' ),
		'new_item'              => __( 'Nuevo plato', 'text_domain' ),
		'edit_item'             => __( 'Editar Plato', 'text_domain' ),
		'update_item'           => __( 'Actualizar Plato', 'text_domain' ),
		'view_item'             => __( 'Visualizar plato', 'text_domain' ),
		'view_items'            => __( 'Visualizar platos', 'text_domain' ),
		'search_items'          => __( 'Buscar Platos', 'text_domain' ),
		'not_found'             => __( 'No se encuentra', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
		'featured_image'        => __( 'Foto principal', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar Plato', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'carta', 'text_domain' ),
		'description'           => __( 'Agregar nuevo plato', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-smiley',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_tipecarta', $args );

}
add_action( 'init', 'post_tipe_carta', 0 );






}
//iconos de redes sociales 
function dl_widgets() {
	 register_sidebar( array(
		 'name' => 'Widget Footer',
		 'id' => 'widget_footer'
	 ));
 }

 add_action('widgets_init', 'dl_widgets');

//logo personalizable
 function config_custom_logo() {
   add_theme_support( 'custom-logo', array(
     'height'      => 100,
     'width'       => 400,
     'flex-height' => true,
     'flex-width'  => true,
     'header-text' => array( 'site-title', 'site-description' ),
   ));
 }

 add_action( 'after_setup_theme', 'config_custom_logo' );



?>
