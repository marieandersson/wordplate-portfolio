<?php

declare(strict_types=1);
/*
* Register theme settings options page
*/
if (function_exists('acf_add_options_page')) {
	acf_add_options_page([
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
  ]);
}
/*
* Register fields for the theme settings options page
*/
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group([
    'key' => 'footer_fields',
    'title' => 'Footer',
    'fields' => [
      [
        'key' => 'footer_email',
        'name' => 'footer_email',
        'label' => 'Footer email',
        'type' => 'email',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'footer_contact_label',
        'name' => 'footer_contact_label',
        'label' => 'Footer contact Label',
        'type' => 'text',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'footer_copyright',
        'name' => 'footer_copyright',
        'label' => 'Footer copyright text',
        'type' => 'text',
      ],
      [
        'key' => 'github_url',
        'name' => 'github_url',
        'label' => 'Github url',
        'type' => 'url',
      ],
      [
        'key' => 'linkedin_url',
        'name' => 'linkedin_url',
        'label' => 'Linkedin url',
        'type' => 'url',
      ],
      [
        'key' => 'twitter_url',
        'name' => 'twitter_url',
        'label' => 'Twitter url',
        'type' => 'url',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-general-settings',
        ],
      ],
    ],
  ]);
}