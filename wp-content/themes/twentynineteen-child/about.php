<?php
/*
Template Name: About
*/

get_header(); ?>

<section class="container-page-about-expertises container-about">
    <article class="container-about-expertise-content">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('about__title'); ?>
	    	</h3>
	    	<h3 class="about-title about-founder">
	    		<?php the_field('about__subtitle'); ?>
	    	</h3>
	    </div>
	 	<div class="container-about-text">
	 		<p>
	 			<?php the_field('about__text'); ?>
	 		</p>
	    </div>
	</article>

	<article class="container-about-expertise-content">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('definition__title'); ?>
	    	</h3>
	    </div>
	 	<div class="container-about-text">
	 		<p>
				<?php the_field('definition__introduction'); ?>
		 	</p>
		 	<div class="content-definition content-first-definition">
			 	<h4 class="degree-card-title">
					<?php the_field('definition__1_title'); ?>
			 	</h4>
		 		<p>
		 			<?php the_field('definition__1_text'); ?>
		 		</p>
		 	</div>
		 	<div class="content-definition content-second-definition">
			 	<h4 class="degree-card-title">
					<?php the_field('definition__2_title'); ?>
			 	</h4>
		 		<p>
		 			<?php the_field('definition__2_text'); ?>
		 		</p>
		 	</div>
	    </div>
	</article>

 	<article class="container-about-expertise-content">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('about_expertise__title'); ?>
	    	</h3>
	    </div>
	 	<div class="container-about-text">
	 		<p>
	 			<?php the_field('about_expertise__text'); ?>
	 		</p>
		 	<div class="learn-more-intro learn-more-about">
	            <a href="<?php echo esc_url( get_permalink(2303) ); ?>">
	                <button>
	                    <?php the_field('about_expertise__btn'); ?>
	                </button>
	            </a>
       	 	</div>
	    </div>
	</article>

</section>

<?php get_footer();