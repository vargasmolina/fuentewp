<?php

/* ######## IMAGENES ##### */

if ( function_exists( 'add_theme_support' ) ) {

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300, 300, true );
    add_image_size( 'th-entrada', 200, 200,  true );
    add_image_size( 'imagen-entrada', 600, 600,  array( 'center', 'center' ) ); 

}
