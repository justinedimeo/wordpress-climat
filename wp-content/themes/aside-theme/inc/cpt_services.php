<?php

add_action( 'init', 'ajout_custom_type_services' );
function ajout_custom_type_services()
{

    $post_type = "services";
    $labels = array(
            'name'               => 'Services',
            'singular_name'      => 'Services',
            'all_items'          => 'Tous les services',
            'add_new'            => 'Ajouter un services',
            'add_new_item'       => 'Ajouter un services',
            'edit_item'          => 'Editer le services',
            'new_item'           => 'Nouveau services',
            'view_item'          => 'Voir services',
            'search_items'       => 'Trouver un services',
            'not_found'          => 'Pas de résultat',
            'not_found_in_trash' => 'Pas de résultat',
            'parent_item_colon'  => 'Services parent',
            'menu_name'          => 'Service',
        );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => false,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => false,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
}