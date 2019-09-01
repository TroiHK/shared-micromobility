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