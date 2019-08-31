<?php
/*
Template Name: Contact
*/

get_header(); ?>

<section class="container-contact">
    <div class="container-contact-form">
    	<h3 class="page-contact-title"><?php the_field('formulaire__title'); ?></h3>
    	<?php echo do_shortcode( '[contact-form-7 id="3288" title="Page contact"]' ); ?>
    </div>    
    <div class="container-contact-information">
        <h3 class="page-contact-title"><?php the_field('information__title'); ?></h3>
		<div class="contact-adress">
        	<h4 class="contact-title"><?php the_field('information__adress_title'); ?></h4>
        	<p><?php the_field('information__adress_text'); ?></p>
        </div>
        <div class="contact-phone">
        	<h4 class="contact-title"><?php the_field('information__phone_title'); ?></h4>
        	<a href="tel:<?php the_field('information__phone_text'); ?>" alt="Phone number to Alexandre"><?php the_field('information__phone_text'); ?></a>
        </div>
        <div class="contact-mail">
        	<h4 class="contact-title"><?php the_field('information__mail_title'); ?></h4>
        	<a href="mailto:<?php the_field('information__mail_text'); ?>"><?php the_field('information__mail_text'); ?></a>
        </div>
        <div class="contact-social-media">
        	<div class="contact-social">
        		<h4 class="contact-title"><?php the_field('information__social_title'); ?></h4>
        		<div class="content-social ">
		            <a href="<?php the_field('link__twitter', 'option'); ?>" alt="Link to Twitter" class="icon-social icon-twitter">
		            </a>
		            <a href="<?php the_field('link__linkedin', 'option'); ?>" alt="Link to Linkedin" class="icon-social icon-linkedin">
		            </a>
		        </div>
	        </div>
        </div>
        	

    </div>
</section>

<?php get_footer();