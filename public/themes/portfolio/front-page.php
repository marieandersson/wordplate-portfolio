<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php
  /*
  * List the three latest blog posts
  */
  $args = [
    'numberposts' => 3,
    'order' => 'desc',
  ];

  $latestPosts = get_posts($args);
?>
<div class="row mt-5 gx-5">
    <?php foreach($latestPosts as $post) :
        setup_postdata($post);  ?>

        <div class="col">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                <h3>
                    <?php the_title(); ?></a>
                </h3>
            </a>
        </div>

    <?php endforeach; ?>
</div><!-- /row -->

<div class="row mt-5 mb-5">
    <div class="col text-end">
        <?php $blogPageUrl = get_permalink(get_option('page_for_posts')); ?>
        <a class="btn btn-dark" href="<?= $blogPageUrl; ?>">All blog posts</a>
    </div> <!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>