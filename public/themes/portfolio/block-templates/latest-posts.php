<?php
/**
 * Latest block Block Template.
 */

$postType = get_field('latest_posts_post_type') ?: 'post';
$numberOfPosts = get_field('latest_posts_number_of_posts') ?: 3;
$archiveLink = get_field('latest_posts_link_to_archive') ?: null;
$linkLabel = get_field('latest_posts_link_label') ?: 'All posts';
$backgroundColor = get_field('latest_posts_background_color');

$latestPosts = get_posts([
    'post_type' => $postType,
    'numberposts' => $numberOfPosts,
    'order' => 'desc',
]);

?>

<div
    class="mb-3 <?= !empty($backgroundColor) ? 'p-5' : 'pt-5 pb-5';?>" <?php if (!empty($backgroundColor)): ?>
    style="background:<?= $backgroundColor; ?>"<?php endif; ?>
>
    <div class="latest-posts row gx-3">
    <?php foreach ($latestPosts as $post) : ?>

        <div class="post col-4 mb-5">
            <a href="<?= get_the_permalink($post); ?>">
                <div class="image-wrapper">
                    <?= get_the_post_thumbnail($post, 'medium'); ?>
                </div>
                <h3>
                    <?= get_the_title($post); ?>
                </h3>
            </a>
        </div>

    <?php endforeach; ?>
    </div>


    <?php if (!empty($archiveLink)) : ?>
    <div class="row mt-5">
        <div class="col text-end">
            <a class="btn btn-dark" href="<?= esc_url($archiveLink); ?>"><?= $linkLabel; ?></a>
        </div>
    </div>
    <?php endif; ?>
</div>
