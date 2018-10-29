<?php
add_action( 'init', 'ajout_custom_type_services' );

function ajout_custom_type_services () {
$post_type = "service";
$labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'all_items'          => 'Tous les services',
        'add_new'            => 'Ajouter un service',
        'add_new_item'       => 'Ajouter un service',
        'edit_item'          => 'Editer le service',
        'new_item'           => 'Nouveau service',
        'view_item'          => 'Voir le service',
        'search_items'       => 'Trouver un service',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Service parent',
        'menu_name'          => 'Service',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
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

    $taxonomy = 'theme';
    $object_type = array('portfolio');
    $args = array(
        'label' => __( 'Thématique' ),
        'rewrite' => array( 'slug' => 'theme' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}