<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>
                <div class="row mb-3">
                    <div class="col">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </div> <!-- /col -->
                </div> <!-- /row -->

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>