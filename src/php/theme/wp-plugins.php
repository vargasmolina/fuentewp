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
    );
/* https://wordpress.org/plugins/kirki/ */
    $plugins[] = array(
        'name'               => 'Kirki',
        'slug'               => 'kirki',
        'required'           => true,
    );

/* https://wordpress.org/plugins/meta-box/ */
    $plugins[] = array(
        'name'               => 'Meta Box – WordPress Custom Fields Framework',
        'slug'               => 'meta-box',
        'required'           => true,
    );

    tgmpa( $plugins);

}