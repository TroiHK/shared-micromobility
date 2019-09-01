<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function comment_validation_init()
{
    if (is_single() && comments_open()) { ?>
        <script type="text/javascript"
                src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#commentform').validate({

                    rules: {
                        author: {
                            required: true,
                            minlength: 2
                        },

                        email: {
                            required: true,
                            email: true
                        },

                        comment: {
                            required: true,
                            minlength: 1
                        }
                    },

                    messages: {
                        author: "Please fill the required field",
                        email: "Please enter a valid email address.",
                        comment: "Please fill the required field"
                    },

                    errorElement: "div",
                    errorPlacement: function (error, element) {
                        element.after(error);
                    }

                });
            });
        </script>
        <?php
    }
}

add_action('wp_footer', 'comment_validation_init');


function lancer_chargement_css()
{

    wp_enqueue_style('style-enfant', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.min.css', array('style-parent'));

    wp_enqueue_style('font-awesome-solid', get_stylesheet_directory_uri() . '/css/font-awesome/fa-solid.min.css', array('style-parent'));
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome/fontawesome.min.css', array('style-parent'));

    wp_enqueue_style('icon-font-bikeshare', get_stylesheet_directory_uri() . '/fonts/font-face.css', array('style-parent'));

    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('style-parent'));
    wp_enqueue_script('bootstrap-js-popper', get_stylesheet_directory_uri() . '/js/bootstrap/popper.min.js', array('style-parent'));
    wp_enqueue_script('bootstrap-js-slim', get_stylesheet_directory_uri() . '/js/bootstrap/jquery-slim.min.js', array('style-parent'));
    wp_enqueue_script('bootstrap-js-anchor', get_stylesheet_directory_uri() . '/js/bootstrap/anchor.min.js', array('style-parent'));

    wp_enqueue_style('style-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-custom', get_template_directory_uri() . '-child/css/custom.css');

    wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css?family=Gothic+A1:100,200,300,400,500,600,700,800,900');

    wp_enqueue_style('poynter gothic text', 'https://use.typekit.net/jvj3pjk.css');


}

add_action('wp_enqueue_scripts', 'lancer_chargement_css');


//Exclude pages from WordPress Search
if (!is_admin()) {
    function wpb_search_filter($query)
    {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }

    add_filter('pre_get_posts', 'wpb_search_filter');
}

function wpb_set_post_views($postID)
{
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//To keep the count accurate, lets get rid of prefetching
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpb_track_post_views($post_id)
{
    if (!is_single()) return;
    if (empty ($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}

add_action('wp_head', 'wpb_track_post_views');
//ajouter une nouvelle zone de menu à mon thème
function register_my_menu()
{
    register_nav_menu('footer-menu', __('Menu Footer'));
}

add_action('init', 'register_my_menu');

add_filter('get_the_excerpt', 'wpse162725_ltrim_excerpt');

function wpse162725_ltrim_excerpt($excerpt)
{
    return preg_replace('~^(\s*(?:&nbsp;)?)*~i', '', $excerpt);
}

// 2019 - Update
define('APP_PATH', dirname(__FILE__));
define('DOMAIN', 'twentynineteen-child');
include APP_PATH . '/inc/admin/functions.php';
include APP_PATH . '/inc/admin/cpt.php';
include APP_PATH . '/inc/plugins/acf/functions.php';
include APP_PATH . '/inc/frontend/functions.php';
?>
