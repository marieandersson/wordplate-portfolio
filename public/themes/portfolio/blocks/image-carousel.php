<?php

declare(strict_types=1);

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {
        // Register the latest posts block
        acf_register_block_type([
            'name'              => 'image-carousel',
            'title'             => __('Image carousel'),
            'description'       => __('An image carousel block.'),
            'render_template'   => 'block-templates/image-carousel.php',
            'category'          => 'formatting',
            'icon'              => 'images-alt2',
            'keywords'          => ['images'],
            'enqueue_assets' 	=> function(){
				wp_enqueue_script( 'block-swiper', get_template_directory_uri() . '/assets/editor.js', array(), '1.0.0', true );
			  },
        ]);
    }

    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
          'key' => 'image_carousel_block_settings',
          'title' => 'Block settings',
          'fields' => [
            [
                'key' => 'image_carousel',
                'name' => 'image_carousel',
                'label' => 'Add images',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'single_carousel_image',
                        'name' => 'singel_carousel_image',
                        'label' => 'Image',
                        'type' => 'image'
                    ],
                ]
            ],
          ],
          'location' => [
            [
                [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/image-carousel',
                ],
            ],
          ],
        ]);
    }
});
