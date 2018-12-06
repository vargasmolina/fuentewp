<?
/**
 *TGM Plugin activation.
 */
require_once DIR_INC . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'greatmag_recommend_plugin' );
function greatmag_recommend_plugin() {
/* https://wordpress.org/plugins/siteorigin-panels/ */
    $plugins[] = array(
        'name'               => 'Page Builder by SiteOrigin',
        'slug'               => 'siteorigin-panels',
        'required'           => true,
        'force_activation'   => true,
    );
/* https://cl.wordpress.org/plugins/so-widgets-bundle/ */
$plugins[] = array(
    'name'               => 'SiteOrigin Widgets Bundle',
    'slug'               => 'so-widgets-bundle',
    'required'           => true,
    'force_activation'   => true,
);

/* https://wordpress.org/plugins/kirki/ */
    $plugins[] = array(
        'name'               => 'Kirki',
        'slug'               => 'kirki',
        'required'           => true,
        'force_activation'   => true,
    );

/* https://wordpress.org/plugins/meta-box/ */
    $plugins[] = array(
        'name'               => 'Meta Box – WordPress Custom Fields Framework',
        'slug'               => 'meta-box',
        'required'           => true,
        'force_activation'   => true,
    );

    tgmpa( $plugins);

}