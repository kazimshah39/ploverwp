<?php

if (! function_exists('ploverwp_header_colors_config')) {
  function ploverwp_header_colors_config() {
    return [
      'header' => [
        'background' => [
          'id' => 'ploverwp_header_background_color',
          'default' => '#333333',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Header Background Color',
          'section' => 'section-header-colors',
        ],
        'site-title' => [
          'id' => 'ploverwp_header_site_title',
          'default' => '#28a745',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Site Title Color',
          'section' => 'section-header-colors',
        ],
        'tagline' => [
          'id' => 'ploverwp_header_tagline',
          'default' => '#ffffff',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Tagline Color',
          'section' => 'section-header-colors',
        ],
      ]
    ];
  }
}