<?php
declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', '', '', true);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');

    wp_enqueue_style('style', get_theme_file_uri('assets/app.css'));
    wp_enqueue_script('script', get_theme_file_uri('assets/app.js'));
});

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_theme_file_uri('assets/editor.css'));
});


// Register project custom post type.
require get_template_directory().'/post-types/project.php';

// Register tool taxonomy for the project custom post type.
require get_template_directory().'/taxonomies/tool.php';

// Register custom fields for the project custom post type.
require get_template_directory().'/fields/project.php';

// Register options fields
require get_template_directory().'/fields/options.php';

// Register blocks
require get_template_directory().'/blocks/latest-posts.php';
require get_template_directory().'/blocks/resume.php';
require get_template_directory().'/blocks/image-carousel.php';
