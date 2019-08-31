<?php get_header('archive');
/*
Template Name: Articles projects
*/

?>

<div class="background-fixed-bar">
	<div class="container-filter-bar container no-padding">
		<div class="container-title-menu">
			<span class="icon-menu icon-menu-filter-bar">
	        </span>
			<h3 class="all-articles">
				All articles
			</h3>
		</div>
		<div class="container-filters">
            <div class="filters filter-all">
                <a alt="Afficher tous les articles" href="<?php echo esc_url( get_permalink(2310) ); ?>">
                    All
                </a>
            </div>
            <div class="filters filter-all">
                <a href="<?php echo esc_url( get_permalink(2507) ); ?>" alt="Afficher les articles <?php echo get_cat_name(2);?>">
                    <?php echo get_cat_name(2);?>
                
                </a>
            </div>
            <div class="filters filter-all">
                <a href="<?php echo esc_url( get_permalink(2512) ); ?>" alt="Afficher les articles <?php echo get_cat_name(3);?>">
                    <?php echo get_cat_name(3);?>
                </a>
            </div>
            <div class="filters filter-all active-filters">
                <a href="<?php echo esc_url( get_permalink(2514) ); ?>" alt="Afficher les articles <?php echo get_cat_name(4);?>">
                    <?php echo get_cat_name(4);?>
                    </a>
                </div>
            <div class="filters filter-all">
                <a href="<?php echo esc_url( get_permalink(2504) ); ?>" alt="Afficher les articles <?php echo get_cat_name(5);?>">
                    <?php echo get_cat_name(5);?>
                </a>
            </div>
        </div>
		<div class="container-search-filter">
			<span class="icon-search icon-search-filter-bar icon-menu-filter-bar">
        	</span>
        </div>
	</div>
</div>

	<div class="container-all-articles">
        <?php $loop = new WP_Query( array( 'posts_per_page' => '-1', 'cat' => 4 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
        <?php endwhile; wp_reset_query(); ?>
	</div>

<?php get_footer();

