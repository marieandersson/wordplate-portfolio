<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <div class="row mb-3">
                    <div class="col-lg-4 col-xxl-3 mb-2">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            } ?>
                        </a>
                    </div> <!-- /col -->
                    <div class="col-lg-8 col-xxl-9">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </div> <!-- /col -->
                </div> <!-- /row -->

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>