<?php

function ajout_scripts() {

wp_register_style( 'style', CSS_URL . '/style.css' );
wp_enqueue_style( 'style' );

wp_register_style( 'blend', CSS_URL . '/blend.css' );
wp_enqueue_style( 'blend' );

wp_register_style( 'responsiveslides', CSS_URL . '/responsiveslides.css' );
wp_enqueue_style( 'responsiveslides' );

wp_register_style( 'public', CSS_URL . '/public.css' );
wp_enqueue_style( 'public' );



wp_register_script('jquery', JS_URL . '/jquery.js', array('jquery'),'1.0', true);
wp_enqueue_script('jquery');

wp_register_script('jquery-migrate.min', JS_URL . '/jquery-migrate.min.js', array('jquery'),'1.0', true);
wp_enqueue_script('jquery-migrate.min');

wp_register_script('responsiveslides.min', JS_URL . '/responsiveslides.min.js', array('jquery'),'1.0', true);
wp_enqueue_script('responsiveslides.min');

wp_register_script('script', JS_URL . '/script.js', array('jquery'),'1.0', true);
wp_enqueue_script('script');

wp_register_script('main', JS_URL . '/main.js', array('jquery'),'1.0', true);
wp_enqueue_script('main');

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


add_action('wp_head', 'ajout_viewport');
function ajout_viewport()
{
  echo     '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

}