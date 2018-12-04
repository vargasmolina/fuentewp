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

//* https://github.com/aristath/kirki/blob/develop/example.php */

function repetir_fields($seccion,$elemento){
/* fuentes */
	Kirki::add_field( 'theme_config_id', array(
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
	) );

/* fondos */
	Kirki::add_field( 'theme_config_id', array(
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
Kirki::add_field( 'theme_config_id', 	array(
	'type'        => 'dimensions',
	'settings'    => $seccion.'dimensions',
	'label'       => esc_html__( 'Dimension Control', 'kirki' ),
	'description' => esc_html__( 'Description Here.', 'kirki' ),
	'section'     => $seccion,
	'default'     => array(
		'padding-top'    => '0em',
		'padding-bottom' => '0em',
		'padding-left'   => '0em',
		'padding-right'  => '0em',
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

}


/*  creando fields */
repetir_fields(section_id_canvas,'#canvas');
repetir_fields(section_id_cabeza,'#cabeza');
repetir_fields(section_id_cuerpo,'#cuerpo');
repetir_fields(section_id_pies,'#pies');

