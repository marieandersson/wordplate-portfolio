<?php get_header(); ?>

<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>
                  <div class="mb-3">
                      <?php the_post_thumbnail('large'); ?>
                  </div>
                <?php endif; ?>

                <h1><?php the_title(); ?></h1>
                <span class="h5"><?php the_date(); ?></span>

                <div class="mt-3">
                  <?php the_content(); ?>
                </div>

                <div class="row mt-5 mb-5">
                  <div class="col-6">
                      <?php previous_post_link(); ?>
                  </div>

                  <div class="col-6 text-end">
                      <?php next_post_link(); ?>
                  </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
        </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>