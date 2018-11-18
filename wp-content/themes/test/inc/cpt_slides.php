<?php
add_action( 'init', 'ajout_custom_type_slide' );

function ajout_custom_type_slide () {
$post_type = "slide";
$labels = array(
        'name'               => 'Slides',
        'singular_name'      => 'Slide',
        'all_items'          => 'Tous les slides',
        'add_new'            => 'Ajouter un Slide',
        'add_new_item'       => 'Ajouter un Slide',
        'edit_item'          => 'Editer le Slide',
        'new_item'           => 'Nouveau Slide',
        'view_item'          => 'Voir le Slide',
        'search_items'       => 'Trouver un Slide',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Slide parent',
        'menu_name'          => 'Slide',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = 'profil';
    $object_type = array('team');
    $args = array(
        'label' => __( 'Profil' ),
        'rewrite' => array( 'slug' => 'profil' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}