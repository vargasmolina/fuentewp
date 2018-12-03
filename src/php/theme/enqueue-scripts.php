<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 */




if ( ! function_exists( 'fuentewp_scripts' ) ) :

	function admin_styles() {
		wp_enqueue_style( 'fuentewp-admin-css', get_stylesheet_directory_uri() . '/wp-admin.css', array(), '0.0.3' , 'all' );
	}

	function login_styles() {
		wp_enqueue_style( 'fuentewp-login-css', get_stylesheet_directory_uri() . '/wp-login.css', array(), '0.0.3' , 'all' );
	}

	function fuentewp_scripts() {

################################## NORMALIZE
	// wp_deregister_style('normalize');
	// wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css' , array(), '5.0.0' , 'all' );

################################## BASICO
	wp_deregister_style('fuentewp-general');
	wp_enqueue_style( 'fuentewp-general', get_stylesheet_directory_uri() . '/general.css', array(), '0.0.3' , 'all' );

// ################################## ICONO GOOGLE
// 	wp_deregister_style('material-icons');
// 	wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '4.5.0' , 'all' );

// ################################## JQUERY
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', false );

################################## GENERAL JAVASCRIPTS
	wp_deregister_script( 'wp-embed' );
	// wp_deregister_script( 'app.js' );
    wp_deregister_script( 'fuentewp-scripts' );
	wp_enqueue_script( 'fuentewp-scripts', get_template_directory_uri() . '/js/general.js', array(), '0.0.1', true );


	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}
	add_action( 'admin_enqueue_scripts', 'admin_styles');
	add_action( 'login_enqueue_scripts', 'login_styles');
	add_action( 'wp_enqueue_scripts', 'fuentewp_scripts' );
endif;

?>
