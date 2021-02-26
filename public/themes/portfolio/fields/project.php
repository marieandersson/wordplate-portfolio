<?php

declare(strict_types=1);
/*
* Register custom fields for the project post type
*/
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group([
    'key' => 'project_info',
    'title' => 'Project info',
    'fields' => [
      [
        'key' => 'project_client',
        'name' => 'project_client',
        'label' => 'Client',
        'type' => 'text',
        'instructions' => 'Fill out the client for this project',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'project_client_website',
        'name' => 'project_client_website',
        'label' => 'Client website',
        'type' => 'url',
        'instructions' => 'Fill out the clients website',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'project_color_profile',
        'name' => 'project_color_profile',
        'label' => 'Color profile',
        'instructions' => 'Pick a project theme color',
        'type' => 'color_picker',
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ],
      ],
    ],
  ]);
}