<?php
add_action( 'init', 'ajout_custom_type_data' );

function ajout_custom_type_data () {
$post_type = "data";
$labels = array(
        'name'               => 'Datas',
        'singular_name'      => 'Data',
        'all_items'          => 'Tous les datas',
        'add_new'            => 'Ajouter une Data',
        'add_new_item'       => 'Ajouter une Data',
        'edit_item'          => 'Editer la Data',
        'new_item'           => 'Nouvelle Data',
        'view_item'          => 'Voir la Data',
        'search_items'       => 'Trouver une Data',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Data parent',
        'menu_name'          => 'Data',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-chart-bar',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = 'chapitre';
    $object_type = array('data');
    $args = array(
        'label' => __( 'Chapitre' ),
        'rewrite' => array( 'slug' => 'chapitre' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}