<?php
add_action( 'init', 'ajout_custom_type_button' );

function ajout_custom_type_button () {
$post_type = "button";
$labels = array(
        'name'               => 'Buttons',
        'singular_name'      => 'Button',
        'all_items'          => 'Tous les buttons',
        'add_new'            => 'Ajouter un Button',
        'add_new_item'       => 'Ajouter un Button',
        'edit_item'          => 'Editer le Button',
        'new_item'           => 'Nouveau Button',
        'view_item'          => 'Voir le Button',
        'search_items'       => 'Trouver un Button',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Button parent',
        'menu_name'          => 'Button',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-screenoptions',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = 'chapitre-button';
    $object_type = array('button');
    $args = array(
        'label' => __( 'Chapitre' ),
        'rewrite' => array( 'slug' => 'chapitre' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );

}