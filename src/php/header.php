<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' &raquo; '; } ?><?php bloginfo('name'); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="canvas"> <? dynamic_sidebar( 'canvas-menu' ); ?> </div>
<header id="cabeza" class="container">
    <? dynamic_sidebar( 'header-widgets' ); ?>
</header>

<main id="cuerpo" class="container">