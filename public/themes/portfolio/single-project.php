<?php get_header(); ?>

<?php
// Get color profile value
$colorProfile = get_field('project_color_profile') ? get_field('project_color_profile') : null;
?>

<div class="row">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <?php if (has_post_thumbnail()): ?>
                  <div class="col-lg-5 mt-2 mb-3">
                    <?php the_post_thumbnail('large'); ?>

                    <?php $tools = get_the_terms( $post, 'tool'); ?>
                    <?php if ($tools): ?>
                        <p class="mb-0 mt-2">
                            <?php foreach ($tools as $tool) : ?>
                                <a href="<?php echo get_term_link($tool) ?>" <?php if ($colorProfile): ?>style="color: <?= $colorProfile; ?>" <?php endif; ?>><?php echo $tool->name ?></a>
                            <?php endforeach; ?>
                        </p>
                    <?php endif; ?>
                  </div>

                <?php endif; ?>

                <div class="col-lg-7">
                    <h1 <?php if ($colorProfile): ?>style="color: <?= $colorProfile; ?>" <?php endif; ?>>
                        <?php the_title(); ?>
                    </h1>

                    <?php if (get_field('project_client')): ?>
                        <?php if (get_field('project_client_website')): ?>
                            <p><em>This project was built for <a href="<?php the_field('project_client_website');?>" <?php if ($colorProfile): ?>style="color: <?= $colorProfile; ?>" <?php endif; ?>><?php the_field('project_client');?></a></em></p>
                        <?php else: ?>
                            <p><em>This project was built for <?php the_field('project_client');?></em></p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="mt-3">
                        <?php the_content(); ?>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
</div><!-- /row -->

<?php get_footer(); ?>