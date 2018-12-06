<?php

// configuracion theme
define('WP_DEBUG', true);
define('WP_CACHE', false );
define('WPLANG', 'es_ES');
define( 'WPMS_ON', true );

// // DIFINE PATH
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'DIR_INC', get_template_directory() . '/inc/' );
define( 'DIR_THEME', get_template_directory() . '/theme/' );
define( 'DIR_WIDGET', get_template_directory() . '/widgets/' );


#carga basico theme
require_once(DIR_THEME.'cleanup.php');
require_once(DIR_THEME.'enqueue-scripts.php');
require_once(DIR_THEME.'wp-plugins.php');

if ( file_exists( WP_PLUGIN_DIR.'/kirki/kirki.php' ) ) { require_once(DIR_THEME.'wp-customizer.php'); }
// require_once(DIR_THEME.'wp-styles.php');
// require_once(PATH_LIBS.'wp-breadcrumb.php');
require_once(DIR_THEME.'wp-paginacion.php');
// require_once(DIR_THEME.'wp-menu.php');
require_once(DIR_THEME.'wp-widget-areas.php');
require_once(DIR_THEME.'wp-no-comentario.php');
require_once(DIR_THEME.'wp-adicional.php');
require_once(DIR_THEME.'wp-imagen.php');
//  adicional widget 
// require_once(DIR_WIDGET.'menu-movil/widget.php');
?>