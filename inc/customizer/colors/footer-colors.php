<?php

if (! function_exists('ploverwp_footer_colors_config')) {
  function ploverwp_footer_colors_config() {
    return [
      'footer' => [
        'background' => [
          'control' => 'color',
          'id' => 'ploverwp_footer_background_color',
          'default' => '#ffffff',
          'transport' => 'postMessage',
          'label' => 'Footer Background Color',
          'description' => '',
          'section' => 'section-footer-colors',
        ]
      ]
    ];
  }
}