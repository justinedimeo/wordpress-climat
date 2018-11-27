<?php
add_action( 'init', 'ajout_custom_type_illustration' );

function ajout_custom_type_illustration () {
$post_type = "illustration";
$labels = array(
        'name'               => 'Illustrations',
        'singular_name'      => 'Illustration',
        'all_items'          => 'Tous les illustrations',
        'add_new'            => 'Ajouter une illustration',
        'add_new_item'       => 'Ajouter une illustration',
        'edit_item'          => 'Editer l illustration',
        'new_item'           => 'Nouvelle illustration',
        'view_item'          => 'Voir l illustration',
        'search_items'       => 'Trouver une illustration',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Illustration parent',
        'menu_name'          => 'Illustration',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-image',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = 'chapitre-illu';
    $object_type = array('illustration');
    $args = array(
        'label' => __( 'Chapitre' ),
        'rewrite' => array( 'slug' => 'chapitre' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );

}