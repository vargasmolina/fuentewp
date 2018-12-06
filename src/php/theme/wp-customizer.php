<?php
include_once ( WP_PLUGIN_DIR.'/kirki/kirki.php' );
// function mytheme_kirki_configuration() {
//     return array( 'url_path'     => WP_PLUGIN_DIR.'/kirki/kirki.php'  );
// }
// add_filter( 'kirki/config', 'mytheme_kirki_configuration' );

/* configuracion */
Kirki::add_config( 'theme_config_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
/* panel */
Kirki::add_panel( 'panel_id', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Panel Theme', 'textdomain' ),
    'description' => esc_attr__( 'Panel configuracion theme', 'textdomain' ),
) );
/* secciones cabeza */
Kirki::add_section( 'section_id_canvas', array(
    'title'          => esc_attr__( 'Canvas', 'textdomain' ),
    'description'    => esc_attr__( 'Cambios para Canvas', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );


/* secciones cabeza */
Kirki::add_section( 'section_id_cabeza', array(
    'title'          => esc_attr__( 'Cabeza', 'textdomain' ),
    'description'    => esc_attr__( 'Cambios para Cabeza', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

/* secciones cuerpo */
Kirki::add_section( 'section_id_cuerpo', array(
    'title'          => esc_attr__( 'Cuerpo', 'textdomain' ),
    'description'    => esc_attr__( 'Cambios para Cuerpo', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 161,
) );

/* secciones pies */
Kirki::add_section( 'section_id_pies', array(
    'title'          => esc_attr__( 'Pies', 'textdomain' ),
    'description'    => esc_attr__( 'Cambios para pies', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 162,
) );

/* secciones pies */
Kirki::add_section( 'section_typografia', array(
    'title'          => esc_attr__( 'Tipografia', 'textdomain' ),
    'description'    => esc_attr__( 'Cambios tipografia', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 163,
) );


//* https://github.com/aristath/kirki/blob/develop/example.php */
/* basico*/

function my_config_kirki_add_field( $args ) {
	Kirki::add_field( 'theme_config_id', $args );
}

function repetir_fields($seccion,$elemento){


/* fuentes */
my_config_kirki_add_field(
	 array(
		'type'        => 'typography',
		'settings'    => $seccion.'font_setting',
		'label'       => esc_attr__( 'Texto', 'textdomain' ),
		'section'     => $seccion,
		'default'     => array(
			'font-family'    => 'Roboto',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
			'color'          => '#000000',
			// 'text-transform' => 'none',
			// 'text-align'     => 'left',
		),
		'priority'    => 10,
		'output'      => array(
			array(
				'element' => $elemento,
				'function' => 'css',
			),
		),
	) 
);

/* fondos */
my_config_kirki_add_field(
	 array(
		'type'        => 'background',
		'settings'    => $seccion.'color_fondo',
		'label'       => __( 'Color Fondo', 'textdomain' ),
		// 'description' => esc_attr__( 'This is a color control - without alpha channel.', 'textdomain' ),
		'section'     => $seccion,

		'default'     => array(
			'background-color'      => '#FFFFFF',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		),

		'output' => array(
			array(
				'element'  => $elemento,
				// 'property' => 'background-color',
				'function' => 'css',
			),
		)
	) 
);
/* esapcio */
// my_config_kirki_add_field(
// 		array(
// 	'type'        => 'dimensions',
// 	'settings'    => $seccion.'dimensions',
// 	'label'       => esc_html__( 'Dimension Control', 'kirki' ),
// 	// 'description' => esc_html__( 'Description Here.', 'kirki' ),
// 	'section'     => $seccion,
// 	'default'     => array(
// 		'padding-top'    => '0em',
// 		'padding-bottom' => '0em',
// 		'padding-left'   => '0em',
// 		'padding-right'  => '0em',
// 	),
// 	'output' => array(
// 		array(
// 			'element'  => $elemento,
// 			// 'property' => 'background-color',
// 			'function' => 'css',
// 		),
// 	)
// )
// );



}




/*  creando fields */
repetir_fields(section_id_canvas,'#canvas');
repetir_fields(section_id_cabeza,'#cabeza');
repetir_fields(section_id_cuerpo,'#cuerpo');
repetir_fields(section_id_pies,'#pies');

/* Tipografia */

my_config_kirki_add_field(
	array(
		'type'        => 'typography',
		'settings'    => 'section_typografia_setting_header',
		'label'       => esc_html__( 'Control Tipografia Cabeceras', 'kirki' ),
		// 'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'section_typografia',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'Roboto',
			'variant'        => 'regular',
			// 'font-size'      => '14px',
			// 'line-height'    => '1.5',
			'letter-spacing' => '0px',
			'color'          => '#000000',
			'text-transform' => 'none',
			'text-align'     => 'left',
		),
		'output'      => array(
			array(
				'element' => array( '#cuerpo h1', '#cuerpo h2', '#cuerpo h3', '#cuerpo h4', '#cuerpo h5', '#cuerpo h6' ),
				'function' => 'css',
			),
		),
	)
);

/**
 * Example function that creates a control containing the available sidebars as choices.
 *
 * @return void
 */


function kirki_sidebars_select_example() {
	$sidebars = array();
	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) {
		$sidebars = $GLOBALS['wp_registered_sidebars'];
	}
	$sidebars_choices = array();
	foreach ( $sidebars as $sidebar ) {
		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name'];
	}
	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}
	Kirki::add_field(
		'kirki_demo', array(
			'type'        => 'select',
			'settings'    => 'sidebars_select',
			'label'       => esc_html__( 'Sidebars Select', 'kirki' ),
			'description' => esc_html__( 'An example of how to implement sidebars selection.', 'kirki' ),
			'section'     => 'select_section',
			'default'     => 'primary',
			'choices'     => $sidebars_choices,
			'priority'    => 30,
		)
	);
}
add_action( 'init', 'kirki_sidebars_select_example', 999 );
