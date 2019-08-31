<?php
/*
Template Name: Page article
*/


get_header('single'); ?>

	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>




			<article class="container-single">
	                <div class="">
	                	<h5 class="single-taxonomy content-taxonomy-article">
		                    <?php the_category($separator = ", "); ?>
		                </h5>
	                    <h2 class="single-title">
	                    	<?php the_title(); ?>
	                    </h2>
	                    <div class="single-description">
	                    	BY
	                    	&nbsp;
	                    	<a class="single-author" href="wordpress/about"> 
	                    		<?php the_author(); ?> 
	                    	</a>
	                    	&nbsp;&nbsp;
	                    	<h6 class="single-date-description content-date-article">
                    			<?php echo get_the_date('j F, Y'); ?>
                			</h6>
	                    </div>
	                    <div class="single-text">
	                    	<?php the_content(); ?>
	                    </div>
	                    </div>
	        	<?php endwhile; ?>
				<?php endif; ?>
	        </article>
	        
	        <span class="container-single border-separation-single"></span>

	      <!--Start Related Posts-->
			<?php

			// Get the tags for the current post
			$orig_post = $post;
			global $post;
			$tags = wp_get_post_tags($post->ID);
			// If the post has tags, run the related post tag query
			if ($tags) {
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
			// Build our tag related custom query arguments
			$custom_query_args=array(
				'tag__in' => $tag_ids, // Select posts with related tags
				'posts_per_page' => 3, // Number of related posts to display
				'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
				'orderby' => 'rand', // Randomize the results
			);
			} else {
			// If the post does not have tags, run the standard related posts query
			$custom_query_args = array( 
				'posts_per_page' => 3, // Number of related posts to display
				'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
				'orderby' => 'rand', // Randomize the results
			);
			}
			// Initiate the custom query
			$custom_query = new WP_Query( $custom_query_args );

			// Run the loop and output data for the results
			if ( $custom_query->have_posts() ) : ?>

				<section class="container-single container-related">
		        	<h2 class="related-articles">
		                Related articles
		            </h2>
		            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
		            <div class="container-article-recent">
				        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				        <article class="container-article">
				            <a href="<?php the_permalink(); ?>" alt="Lien vers l'article : <?php the_title(); ?>" class="content-link-article"> 
				            </a>
				            <div class="content-img-article" style="background-image: url('<?php echo $thumb['0'];?>')">
				            </div>
				                <div class="content-article">
				                <h5 class="content-taxonomy-article">
				                    <?php the_category($separator = ", "); ?>
				                </h5>
				                <h2 class="content-title-article">
				                    <?php the_title(); ?>
				                </h2>
				                <p class="content-text-article">
				                    <?php echo get_the_excerpt(); ?>
				                </p>
				                <h6 class="content-date-article">
				                    <?php echo get_the_date('j F, Y'); ?>
				                </h6>
				            </div>
				        </article>
				    </div>
				    <?php endwhile; ?>
		        </section>

		<?php else : ?>
				<p>Sorry, no related articles to display.</p>
		<?php endif;

		// Reset postdata
		wp_reset_postdata();
		?>
		<!--End Related Posts-->
	        <span class="container-single border-separation-single"></span>



	    <!-- <div class="container-switch-blog d-flex margin-auto col-10 col-sm-10 col-md-10 col-lg-10 no-padding no-margin">
	        	<div class="post-left col-12 col-sm-6 col-md-6 col-lg-6 no-padding">
			    	<?php 
					$p = get_adjacent_post(false, '', true);
					if(!empty($p)) echo '<div class="prev"><a alt="Article précédent" href="' . get_permalink($p->ID) . '" title="' . $p->post_title . '">' . $p->post_title . '</a></div>';?>
			    </div>

			    <div class="post-right col-12 col-sm-6 col-md-6 col-lg-6 no-padding">
			    	<?php 
					$n = get_adjacent_post(false, '', false);
					if(!empty($n)) echo '<div class="next"><a  alt="Article suivant" href="' . get_permalink($n->ID) . '" title="' . $n->post_title . '">' . $n->post_title . '</a></div>';?>
			    </div>
	        </div>
	    -->


<?php comments_template(); ?>

<?php get_footer();


