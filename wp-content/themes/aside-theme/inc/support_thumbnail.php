<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'page-thumb', 600, 600, true );

    add_image_size( 'portfolio-thumb', 600, 9999999, false );

    add_image_size( 'member-thumb', 700, 487, false );
}