<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <title><?php bloginfo('Or bleu'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>