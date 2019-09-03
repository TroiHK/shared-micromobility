<?php if (!defined('APP_PATH')) die ('Bad requested!');

if (!function_exists('create_experiences')) {

    function create_experiences() {

        $labels = array(
            'name' => __('Experiences', DOMAIN),
            'singular_name' => __('Experience', DOMAIN),
            'add_new' => __('Add New', DOMAIN),
            'add_new_item' => __('Add New Experience', DOMAIN),
            'edit_item' => __('Edit Experience', DOMAIN),
            'new_item' => __('New Experience', DOMAIN),
            'view_item' => __('View Experience', DOMAIN),
            'search_items' => __('Search Experiences', DOMAIN),
            'not_found' => __('No experiences found', DOMAIN),
            'not_found_in_trash' => __('No experiences found in Trash', DOMAIN),
            'parent_item_colon' => 'Parent Experiences',
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
            'menu_icon' => 'dashicons-analytics',
            'rewrite' => array('slug' => __('experience', DOMAIN))
        );

        register_post_type('experiences', $args);
    }
}

add_action('init', 'create_experiences');

if (!function_exists('create_references')) {

    function create_references() {

        $labels = array(
            'name' => __('References', DOMAIN),
            'singular_name' => __('Reference', DOMAIN),
            'add_new' => __('Add New', DOMAIN),
            'add_new_item' => __('Add New Reference', DOMAIN),
            'edit_item' => __('Edit Reference', DOMAIN),
            'new_item' => __('New Reference', DOMAIN),
            'view_item' => __('View Reference', DOMAIN),
            'search_items' => __('Search References', DOMAIN),
            'not_found' => __('No references found', DOMAIN),
            'not_found_in_trash' => __('No references found in Trash', DOMAIN),
            'parent_item_colon' => 'Parent References',
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
            'menu_icon' => 'dashicons-analytics',
            'rewrite' => array('slug' => __('references', DOMAIN))
        );

        register_post_type('references', $args);
    }
}

add_action('init', 'create_references');