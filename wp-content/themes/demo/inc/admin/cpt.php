<?php

if (!function_exists('create_events')) {

    function create_events() {

        $labels = array(
            'name' => __('Les évènements', DOMAIN),
            'singular_name' => __('Le évènement', DOMAIN),
            'add_new' => __('Ajouter', DOMAIN),
            'add_new_item' => __('Créer un évènement', DOMAIN),
            'edit_item' => __('Éditer un évènement', DOMAIN),
            'new_item' => __('Nouveau Les évènements', DOMAIN),
            'view_item' => __('Voir le évènement', DOMAIN),
            'search_items' => __('Rechercher', DOMAIN),
            'not_found' => __('Aucun évènement', DOMAIN),
            'not_found_in_trash' => __('Aucun évènement dans la corbeille', DOMAIN),
            'parent_item_colon' => '',
        );


        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'has_archive' => false,
            'capability_type' => 'post',
            'hierarchical' => true,
            'menu_position' => 5,
            'supports' => array('title', 'revisions'),
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'rewrite' => array('slug' => __('event', DOMAIN))
        );

        register_post_type('events', $args);
    }
}

add_action('init', 'create_events');