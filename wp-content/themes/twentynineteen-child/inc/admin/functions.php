<?php if (!defined('APP_PATH')) die ('Bad requested!');

/**
 * Change the Login Logo
 */
//function load_admin_style()
//{
//    wp_enqueue_style('admin_css', ASSETS_PATH . 'css/admin-style.css', false, '1.0.0');
//}
//add_action('admin_enqueue_scripts', 'load_admin_style');

function default_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background: url('<?= get_template_directory_uri() ?>-child/logo.png') no-repeat center;
            background-size: contain;
            padding-bottom: 30px;
            height: 85px;
            width: 100%;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'default_login_logo');

function default_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'default_login_logo_url');

function default_login_logo_url_title()
{
    return get_bloginfo('name');
}
add_filter('login_headertext', 'default_login_logo_url_title');
