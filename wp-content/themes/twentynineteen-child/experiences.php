<?php
/*
Template Name: Experiences
*/

get_header(); ?>

    <section class="container-page-about-expertises container-about">

        <article class="container-about-expertise-content">
            <div class="container-about-title">
                <h3 class="about-title">
                    <?= get_the_title(); ?>
                </h3>
            </div>
            <?php
            $args = array(
                'post_type' => 'experiences',
                'posts_per_page' => -1,
                'post_status' => 'publish'
            );

            $experiences = new WP_Query($args);
            ?>
            <?php if ( $experiences->have_posts() ) : ?>
            <div class="flex-direction-col">
                <?php while ( $experiences->have_posts() ) : $experiences->the_post(); ?>
                    <a href="<?= get_field('link'); ?>" alt="">
                        <div class="container-about-text container-degree-content">
                            <h5 class="degree-date">
                                <?= get_field('date'); ?>
                            </h5>
                            <div class="degree-content">
                                <h4 class="degree-card-title">
                                    <?= get_field('company'); ?>
                                </h4>
                                <p class="experiences-tache">
                                    <?= get_field('role'); ?>
                                </p>
                                <div class="des">
                                    <?= get_field('description'); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <?php endif; ?>
        </article>

    </section>

<?php get_footer();