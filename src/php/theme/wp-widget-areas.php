<?php
/**
 * Register widget areas
 *
  */

if ( ! function_exists( 'fuentewp_widgets' ) ) :
function fuentewp_widgets() {


// #################// header
    register_sidebar(array(
      'id' => 'header-widgets',
      'name' => __( 'Header', 'textdomain' ),
      'description' => __( 'contenedor cabecera del sitio', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget-bloque %2$s">',
      'after_widget' => '</div>',
      'before_title'  => '<div class="widget-title">',
      'after_title' => '</div>',
    ));

// #################// footer
    register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __( 'Footer', 'textdomain' ),
      'description' => __( 'contenedor Pie del Sitio', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget-bloque %2$s">',
      'after_widget' => '</div>',
      'before_title'  => '<div class="widget-title">',
      'after_title' => '</div>',
    ));

// #################// footer
    register_sidebar(array(
      'id' => 'canvas-menu',
      'name' => __( 'Canvas  Menu', 'textdomain' ),
      'description' => __( 'contenedor Canvas Menu', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget-bloque %2$s">',
      'after_widget' => '</div>',
      'before_title'  => '<div class="widget-title">',
      'after_title' => '</div>',
    ));

// #################// header
register_sidebar(array(
  'id' => 'lateral-widgets',
  'name' => __( 'Lateral', 'textdomain' ),
  'description' => __( 'contenedor lateral del sitio', 'textdomain' ),
  'before_widget' => '<div id="%1$s" class="widget-bloque %2$s">',
  'after_widget' => '</div>',
  'before_title'  => '<div class="widget-title">',
  'after_title' => '</div>',
));

  
}

add_action( 'widgets_init', 'fuentewp_widgets' );
endif;
?>
