<?php

if (! function_exists('ploverwp_footer_colors_config')) {
  function ploverwp_footer_colors_config() {
    return [
      'footer' => [
        'background' => [
          'id' => 'ploverwp_footer_background_color',
          'default' => '#ffffff',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Footer Background Color',
          'section' => 'section-footer-colors',
        ]
      ]
    ];
  }
}