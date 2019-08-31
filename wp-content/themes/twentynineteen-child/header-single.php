<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="background-gradiant">
</div>

<main id="page" class="container no-padding">
	<header class="header-single d-flex align-items-center no-padding">
		<progress id="progressbar" value="0" max="100">	
		</progress>
		<div class="container d-flex align-items-center no-padding">
			<span class="icon-menu">
	        </span>			

			<a href="<?php echo esc_url( get_permalink(2310) ); ?>" alt="Go to the articles page">
				<span>All articles</span><span class="display-none-tablet">></span>
			</a>
			<p>
				<?php the_title(); ?>
			</p>

			<span class="icon-search icon-search-single">
	        </span>	
		</div>
	</header>


	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php endif; ?>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>

	<div class="search-container">
		<div class="form-container ">
			<div class="container-search no-padding">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="search-background">
		</div>
	</div>

