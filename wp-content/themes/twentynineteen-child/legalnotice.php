<?php
/*
Template Name: Legal Notice
*/

get_header(); ?>

<section class="container-mentions">
	<article class="container-single">
	    <div class="">
	    	<h2 class="single-title">
	    		<?php the_title(); ?>
	    	</h2>
			</br>
			</br>
			<?php
				// TO SHOW THE PAGE CONTENTS
				while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
					<div class="single-text">
						<?php the_content(); ?> <!-- Page Content -->
					</div><!-- .entry-content-page -->

			<?php
			endwhile; //resetting the page loop
			wp_reset_query(); //resetting the page query
			?>
	    </div>   
	</article> 
	
	
</section>

<?php get_footer();