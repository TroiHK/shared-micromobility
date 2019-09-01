<article class="container-about-expertise-content">
    <div class="container-about-title">
        <h3 class="about-title">
            <?php the_field('experiences__title'); ?>
        </h3>
    </div>
    <?php $experiences = get_field('experiences_items');  ?>
    <div class="flex-direction-col">
        <?php foreach ($experiences as $experience) : ?>
            <a href="<?= get_field('link', $experience); ?>" alt="">
                <div class="container-about-text container-degree-content">
                    <h5 class="degree-date">
                        <?= get_field('date', $experience); ?>
                    </h5>
                    <div class="degree-content">
                        <h4 class="degree-card-title">
                            <?= get_field('company', $experience); ?>
                        </h4>
                        <p class="experiences-tache">
                            <?= get_field('role', $experience); ?>
                        </p>
                        <div class="des">
                            <?= get_field('description', $experience); ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
        <a href="<?= get_field('experiences_view_all')['url']; ?>" class="btn-view-all"><i class="fas fa-arrow-right"></i> <?= get_field('experiences_view_all')['title']; ?></a>
    </div>
</article>