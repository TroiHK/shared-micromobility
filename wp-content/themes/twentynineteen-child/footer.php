<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

</main><!-- #page -->

<footer>

	<div id="footer-active" class="footer-newsletter">
		<!--[mc4wp_form id="133"]-->
		<div class="newsletter-text">
			<?php the_field('newsletter_text', 'option'); ?>
		</div>

		<div class="newsletter-form">
			<!--<input type="email" name="EMAIL" placeholder="Your email address" required /> 
			<input type="submit" value="Subscribe" />-->
			<?php echo do_shortcode( '[contact-form-7 id="3027" title="Mailchimp"]' ); ?>

		</div>
	</div>

	<div class="footer-information">
		<div class="container align-item-center no-padding information-first-bandeau">
			<div class="logo-site logo-footer" style="background-image: url('<?php the_field('logo_site_white', 'option'); ?>')">
           	</div>

			<div class="container-menu-footer">
				<div class="container-menu-footer">
					<?php
					wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_class'     => 'footer-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
					);
					?>
				</div>
				<div class="content-social">
	                <a href="<?php the_field('link__twitter', 'option'); ?>" alt="Link to Twitter" class="icon-social icon-twitter">
	                </a>
	                <a href="<?php the_field('link__linkedin', 'option'); ?>"  alt="Link to Linkedin" class="icon-social icon-linkedin">
	                </a>
	            </div>
	        </div>
		</div>
		<span class="footer-border"></span>
		<div class="container align-item-center no-padding information-second-bandeau">
			<div class="container-menu-footer">
				<h2>
					<?php the_field('footer__alex', 'option'); ?>
				</h2>
				<div class="footer-information-right">
					<p class="credits" href="">
						<?php the_field('footer__credits', 'option'); ?>
					</p>
					<a class="mentions-legales" alt="Link to legal notice page" href="<?php echo esc_url( get_permalink(2493) ); ?>">
						<?php the_field('footer__mentions', 'option'); ?>
					</a>
					<p class="copyright">
						<?php the_field('footer__copyright', 'option'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-modal">
		<div class="content-modal">
			<span class="icon-close icon-close-credits">
	        </span>
            <?php while ( have_rows('footer__credits_items', 'option') ) : the_row(); ?>
			<div class="credits-item">
				<p><?= get_sub_field('title') ?></p>
				<h3><a href="<?= get_sub_field('link')['url'] ?>" alt="portoflio to <?= get_sub_field('link')['title'] ?>"><?= get_sub_field('link')['title'] ?></a></h3>
			</div>
            <?php endwhile; ?>
		</div>
		<div class="modal-background">
		</div>
	</div>
</footer><!-- #colophon -->



<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</body>
</html>
