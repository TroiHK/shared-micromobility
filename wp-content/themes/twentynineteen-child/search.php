	<?php
	/**
	 * The template for displaying search results pages
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
	 *
	 * @package WordPress
	 * @subpackage Twenty_Nineteen
	 * @since 1.0.0
	 */

	/*
Template Name: Search page
*/


	get_header('searchresults'); ?>

			<div class="search-container search-container-page">
				<div class="form-container form-container-page">
					<div class="container-search no-padding">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>

			<div class="result">
				<div class="content-result">
					<?php if ( have_posts() ) : ?>
						<?php echo "
						<h3>
							<strong>"?> 
								<?php echo count($posts); ?><?php echo "
							</strong> results for 
							<strong>"?>
								<?php echo get_search_query(); ?>
								<?php echo "
							</strong>	
						</h3>"	 ?>

						<?php

						// Start the Loop.
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content/content', 'excerpt' );
							// End the loop.
							endwhile;


						// Previous/next page navigation.
						twentynineteen_the_posts_navigation();
					endif;
		?>
				</div>
			</div>


<?php get_footer();
