<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section class="container-404">
		<h3 class="error-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h3>
		<div class="error-form page-content">
			<p class="text-404">
				<?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?>
			</p>
			<?php get_search_form(); ?>
		</div>
	</section>

<?php
get_footer();
