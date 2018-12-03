<?php 

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'superior Menu' ),
      // 'lateral-menu' => __( 'lateral Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


?>