<?php
/*
Template Name: Expertises
*/

get_header(); ?>

<section class="container-page-about-expertises container-about">
    <article class="container-about-expertise-content">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('expertises__title'); ?>
	    	</h3>
	    	<h3 class="about-title about-founder">
	    		<?php the_field('expertises__subtitle'); ?>
	    	</h3>
	    </div>
	 	<div class="container-about-text">
	 		<div class="container-expertises">
	 			<h4 class='expertises-title'>
		 			<?php the_field('expertises__1_title'); ?>
		 		</h4>
		 		<p>
		 			<?php the_field('expertises__1_text'); ?>
		 		</p>
		    </div>

		    <div class="container-expertises">
	 			<h4 class='expertises-title'>
		 			<?php the_field('expertises__2_title'); ?>
		 		</h4>
		 		<p>
		 			<?php the_field('expertises__2_text'); ?>
		 		</p>
		    </div>

		    <div class="container-expertises">
	 			<h4 class='expertises-title'>
		 			<?php the_field('expertises__3_title'); ?>
		 		</h4>
		 		<p>
		 			<?php the_field('expertises__3_text'); ?>
		 		</p>
		    </div>
		</div>
	</article>

	 <article class="container-about-expertise-content">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('experiences__title'); ?>
	    	</h3>
	    </div>
	    <a href="<?php the_field('experiences_1__link'); ?>" alt="">
		 	<div class="flex-direction-col">
		 		<div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_1__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_1__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_1__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_1__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>

		    <a href="<?php the_field('experiences_2__link'); ?>" alt="">
			    <div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_2__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_2__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_2__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_2__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>

		    <a href="<?php the_field('experiences_3__link'); ?>" alt="">
			    <div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_3__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_3__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_3__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_3__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>

		    <a href="<?php the_field('experiences_4__link'); ?>" alt="">
			    <div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_4__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_4__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_4__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_4__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>

		    <a href="<?php the_field('experiences_5__link'); ?>" alt="">
		    	<div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_5__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_5__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_5__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_5__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>

		    <a href="<?php the_field('experiences_6__link'); ?>" alt="">
		    	<div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_6__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_6__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_6__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_6__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>

		    <a href="<?php the_field('experiences_7__link'); ?>" alt="">
		    	<div class="container-about-text container-degree-content">
			 		<h5 class="degree-date">
			 			<?php the_field('experiences_7__date'); ?>
			 		</h5>
			 		<div class="degree-content">
			 			<h4 class="degree-card-title">
			 				<?php the_field('experiences_7__title'); ?>
			 			</h4>
			 			<p class="experiences-tache">
			 				<?php the_field('experiences_7__subtitle'); ?>
			 			</p>
			 			<p>
			 				<?php the_field('experiences_7__text'); ?>
			 			</p>
			 		</div>
			    </div>
			</a>
		</div>
	</article>

	<article class="international-exp container-about-expertise-content container-international-experiences">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('international_experiences_title'); ?>
	    	</h3>
	    </div>
	    <div class="margin-left-international">
		 	<div class="flex-direction-col">
		 		<div class="start container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_1__country'); ?>
			 		</h5>
			    </div>

			    <div class="container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_2__country'); ?>
			 		</h5>
			    </div>

			    <div class="container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_3__country'); ?>
			 		</h5>
			    </div>

			    <div class="container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_4__country'); ?>
			 		</h5>
			    </div>

			    <div class="container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_5__country'); ?>
			 		</h5>
			    </div>

			    <div class="container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_6__country'); ?>
			 		</h5>
			    </div>

			    <div class="container-about-text container-degree-content container-international-content">
			 		<h5 class="degree-date">
			 			<?php the_field('international_experiences_7__country'); ?>
			 		</h5>
			    </div>

			</div>
		</div>
	</article>

	<article class="container-about-expertise-content">
	    <div class="container-about-title">
	    	<h3 class="about-title">
	    		<?php the_field('feedbacks__title'); ?>
	    	</h3>
	    </div>
	 	<div class="flex-direction-feedbacks">
	 		<div class="container-about-text">
		 		<div class="container-feedbacks">
		            <div class="content-img-references" style="background-image: url('<?php the_field('feedbacks__1_image'); ?>')">
		            </div>
		 			<h4 class='feedbacks-title'>
			 			<?php the_field('feedbacks__1_title'); ?>
			 		</h4>
			 		<p>
			 			<?php the_field('feedbacks__1_text'); ?>
			 		</p>
			    </div>
			</div>

			<div class="container-about-text">
		 		<div class="container-feedbacks">
		            <div class="content-img-references" style="background-image: url('<?php the_field('feedbacks__2_image'); ?>')">
		            </div>
		 			<h4 class='feedbacks-title'>
			 			<?php the_field('feedbacks__2_title'); ?>
			 		</h4>
			 		<p>
			 			<?php the_field('feedbacks__2_text'); ?>
			 		</p>
			    </div>
			</div>
		</div>
	</article>
	
	<div class="view-all-article contact-us">
        <p class="btn-text">
        	<?php the_field('btn_text'); ?>
        </p>
        <a href="<?php echo esc_url( get_permalink(2312) ); ?>">
            <button>
                <?php the_field('contact_us'); ?>
            </button>
        </a>
    </div>

</section>

<?php get_footer();