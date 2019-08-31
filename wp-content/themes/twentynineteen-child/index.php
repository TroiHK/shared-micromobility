<?php
/*
Template Name: Accueil
*/

get_header('home'); ?>

<?php $loop = new WP_Query( array( 'posts_per_page' => '1' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<section class="wrapper-bandeau">
    <article class="container-bandeau">
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
                <a href="<?php the_permalink(); ?>" alt="Link to the article : <?php the_title(); ?>" class="bandeau-btn"> 
                    Read more
                </a>
            </div>
            <div class="bandeau-img content-img-article" style="background-image: url('<?php echo $thumb['0'];?>')">
            </div>
        </article>
</section>
<?php endwhile; wp_reset_query(); ?>

<section class="container-article-home">
    <div class="container-article-recent">
        <h3 class="article-category-title category-recent">
            Recent
        </h3>
        <?php $loop = new WP_Query( array( 'posts_per_page' => '10' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <article class="container-article">
            <a href="<?php the_permalink(); ?>" alt="Link to the article : <?php the_title(); ?>" class="content-link-article"> 
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
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <div class="container-article-popular">
        <h3 class="article-category-title category-popular">
            Popular
        </h3>
        <?php 
        $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
            <article class="container-article">
                <a href="<?php the_permalink(); ?>" alt="Link to the article : <?php the_title(); ?>" class="content-link-article"> 
                </a>
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
        <?php endwhile; wp_reset_query(); ?>
    </div>
    
    <div class="view-all-article">
        <a alt="Afficher tous les articles" href="<?php echo esc_url( get_permalink(2310) ); ?>">
            <button>
                <?php the_field('articles__btn_all_articles'); ?>
            </button>
        </a>
    </div>
</section>
</main>

<section class="container-introduction-full">
    <div class="container-introduction">
        <div class="container-col-text">
            <h2 class="title-introduction">
                <?php the_field('introduction__title'); ?>
            </h2>
            <p class="text-introduction">
                <?php the_field('introduction__text'); ?>
            </p>
            <div class="learn-more-intro">
                <a href="<?php echo esc_url( get_permalink(2303) ); ?>">
                    <button>
                        <?php the_field('introduction__social_text'); ?>
                    </button>
                </a>
            </div>
        </div>    
        <div class="container-col-img">
            <?php if( get_field('introduction__image') ): ?>
                <img src="<?php the_field('introduction__image'); ?>" />
            <?php endif; ?>
        </div>

    </div>
</section>



   




<?php get_footer();
