<?php

declare(strict_types=1);

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {
        // Register the latest posts block
        acf_register_block_type([
            'name'              => 'resume',
            'title'             => __('Resume'),
            'description'       => __('A block to list all your experience.'),
            'render_template'   => 'block-templates/resume.php',
            'category'          => 'formatting',
            'icon'              => 'portfolio',
            'keywords'          => ['code'],
        ]);
    }

    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
          'key' => 'resume_block_settings',
          'title' => 'Block settings',
          'fields' => [
            [
                'key' => 'resume_items',
                'name' => 'resume_items',
                'label' => 'Add experience',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'resume_title',
                        'name' => 'resume_title',
                        'label' => 'Title',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'resume_place',
                        'name' => 'resume_place',
                        'label' => 'Company / School',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'resume_description',
                        'name' => 'resume_description',
                        'label' => 'Description',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'resume_time',
                        'name' => 'resume_time',
                        'label' => 'Time period',
                        'type' => 'text'
                    ],
                ]
            ],
          ],
          'location' => [
            [
                [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/resume',
                ],
            ],
          ],
        ]);
    }
});
