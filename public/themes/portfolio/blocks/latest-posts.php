<?php

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {
        // Register the latest posts block
        acf_register_block_type([
            'name'              => 'latest-posts',
            'title'             => __('Latest posts'),
            'description'       => __('A block that displays a selected number of posts, in descending order.'),
            'render_template'   => 'block-templates/latest-posts.php',
            'category'          => 'formatting',
            'icon'              => 'megaphone',
            'keywords'          => ['posts'],
        ]);
    }

    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
          'key' => 'lastest_posts_block_settings',
          'title' => 'Block settings',
          'fields' => [
            [
              'key' => 'latest_posts_post_type',
              'name' => 'latest_posts_post_type',
              'label' => 'Post type',
              'type' => 'select',
              'choices' => [
                'post' => 'post',
                'project' => 'project'
              ],
            ],
            [
                'key' => 'latest_posts_number_of_posts',
                'name' => 'latest_posts_number_of_posts',
                'label' => 'Number of posts',
                'type' => 'number',
                'default_value' => 3,
                'min' => 1,
                'max' => 12,
            ],
            [
                'key' => 'latest_posts_link_to_archive',
                'name' => 'latest_posts_link_to_archive',
                'label' => 'Link to post type archive',
                'type' => 'page_link',
                'post_type' => 'page',
                    'allow_null' => true,
            ],
            [
                'key' => 'latest_posts_link_label',
                'name' => 'latest_posts_link_label',
                'label' => 'Link label',
                'type' => 'text',
            ],
            [
                'key' => 'latest_posts_background_color',
                'name' => 'latest_posts_background_color',
                'label' => 'Background color',
                'type' => 'color_picker',
            ],
          ],
          'location' => [
            [
                [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/latest-posts',
                ],
            ],
          ],
        ]);
    }
});
