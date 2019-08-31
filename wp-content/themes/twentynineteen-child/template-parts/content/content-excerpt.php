<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <article class="container-article container-results">
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