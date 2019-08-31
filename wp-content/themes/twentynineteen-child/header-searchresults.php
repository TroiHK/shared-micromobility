<?php
/**
 * The header for search results
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<main id="page" class="container container-searchresults no-padding">
	<header class="d-flex align-items-center no-padding">
		<div class="container d-flex align-items-center no-padding">
			<span class="icon-close"  onclick="history.back()">
	        </span>	
		</div>
	</header>

