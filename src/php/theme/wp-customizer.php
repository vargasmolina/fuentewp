<?php
// Kirki::add_field( 'theme_config_id', array(
// 	'type'        => 'typography',
// 	'settings'    => 'my_setting',
// 	'label'       => esc_attr__( 'Control Label', 'textdomain' ),
// 	'section'     => 'section_id',
// 	'default'     => array(
// 		'font-family'    => 'Roboto',
// 		'variant'        => 'regular',
// 		'font-size'      => '14px',
// 		'line-height'    => '1.5',
// 		'letter-spacing' => '0',
// 		'color'          => '#333333',
// 		'text-transform' => 'none',
// 		'text-align'     => 'left',
// 	),
// 	'priority'    => 10,
// 	'output'      => array(
// 		array(
// 			'element' => 'body',
// 		),
// 	),
// ) );

include_once ( WP_PLUGIN_DIR.'/kirki/kirki.php' );

// echo WP_PLUGIN_DIR.'/kirki/kirki.php';

// Kirki::add_config( 'my_theme', array(
//     'capability'    => 'edit_theme_options',
//     'option_type'   => 'option',
//     'option_name'   => 'my_theme',
// ) );

Kirki::add_config( 'theme_config_id', array(
	'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
    // 'option_name'   => 'unifam2018',
) );

Kirki::add_panel( 'panel_id', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Opciones', 'textdomain' ),
    'description' => esc_attr__( 'Opciones Theme', 'textdomain' ),
) );

Kirki::add_section( 'section_id', array(
    'title'          => esc_attr__( 'My Section', 'textdomain' ),
    'description'    => esc_attr__( 'My section description.', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

Kirki::add_field( 'theme_config_id', array(
	'type'        => 'color',
	'settings'    => 'color_setting_hex',
	'label'       => __( 'Color Control (hex-only)', 'textdomain' ),
	'description' => esc_attr__( 'This is a color control - without alpha channel.', 'textdomain' ),
	'section'     => 'section_id',
	'default'     => '#0088CC',
) );

/* Fuentes y demas  */

Kirki::add_section( 'section_font', array(
    'title'          => esc_attr__( 'Fuentes Google', 'textdomain' ),
    'description'    => esc_attr__( 'Agregar Fuente Google ', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

Kirki::add_field( 'theme_config_id', array(
	'type'        => 'typography',
	'settings'    => 'font_setting_body',
	'label'       => esc_attr__( 'Texto <BODY>', 'textdomain' ),
	'section'     => 'section_font',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	),
	'priority'    => 10,
	'output'      => array(
		array(
            'element' => 'body',
            'function' => 'css',
		),
	),
) );

// Kirki::add_field( 'theme_config_id', array(
// 	'type'        => 'dimension',
// 	'settings'    => 'dimension_setting',
// 	'label'       => esc_attr__( 'Dimension pagina web', 'textdomain' ),
// 	'description' => esc_attr__( 'Description Here.', 'textdomain' ),
// 	'section'     => 'section_id',
//     'default'     => '1024px',
    // 'output' => array(
    //     array(
    //         'element'  => '.contenido',
    //         'property' => '',
    //     ),
    // )
// ) );
/* Pies seccion */
Kirki::add_section( 'section_id_cuerpo', array(
    'title'          => esc_attr__( 'Cuerpo Pagina', 'textdomain' ),
    'description'    => esc_attr__( 'Arreglos Cuerpo pagina', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 170,
) );


Kirki::add_field( 'theme_config_id', array(
	'type'        => 'typography',
	'settings'    => 'font_cuerpo_widget_title',
	'label'       => esc_attr__( 'Seccion widget-title', 'textdomain' ),
	'section'     => 'section_id_cuerpo',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
        'line-height'    => '1.5',
        'text-transform' => 'none',
        'color'          => '#CCCCCC',
        'text-align'     => 'left',
	),
	'priority'    => 10,
	'output'      => array(
		array(
            'element' => '.widget-title ',
            'function' => 'css',
		),
	),
) );

/* Pies seccion */
Kirki::add_section( 'section_id_pies', array(
    'title'          => esc_attr__( 'Pies Pagina', 'textdomain' ),
    'description'    => esc_attr__( 'Arreglos Pie de pagina', 'textdomain' ),
    'panel'          => 'panel_id',
    'priority'       => 170,
) );

Kirki::add_field( 'theme_config_id', array(
	'type'        => 'color',
	'settings'    => 'color_fondo_pies',
	'label'       => __( 'Color Fondo ', 'textdomain' ),
	// 'description' => esc_attr__( 'This is a color control - without alpha channel.', 'textdomain' ),
	'section'     => 'section_id_pies',
    'default'     => '#CCCCCC',
    'output' => array(
        array(
            'element'  => '#pies',
            'property' => 'background-color',
        ),
    )
) );

Kirki::add_field( 'theme_config_id', array(
	'type'        => 'color',
	'settings'    => 'color_letra_pies',
	'label'       => __( 'Color Letras', 'textdomain' ),
	// 'description' => esc_attr__( 'This is a color control - without alpha channel.', 'textdomain' ),
	'section'     => 'section_id_pies',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => '#pies',
            'property' => 'color',
        ),
    )
) );