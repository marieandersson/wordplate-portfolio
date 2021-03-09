<?php /* Template name: About */ ?>

<?php get_header(); ?>

<div class="row d-block">
    <div class="col">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
        </div><!-- /col -->
</div><!-- /row -->


<?php
  /*
  * List the latest project
  */
  $args = [
    'post_type' => 'project',
    'numberposts' => 1,
    'order' => 'desc',
  ];
  $latestProject = get_posts($args);
?>

<?php if (count($latestProject)): ?>
    <div class="row mt-5">
        <h2 class="h3 mb-3">Check out my latest project</h2>

        <?php foreach ($latestProject as $post): setup_postdata($post); ?>
            <div class="col-sm-3">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </div> <!-- /col -->

            <div class="col-sm-9">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
            </div> <!-- /col -->
        <?php endforeach; ?>

    </div><!-- /row -->
<?php endif; ?>

<?php get_footer(); ?>
