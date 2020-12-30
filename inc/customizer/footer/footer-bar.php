<?php

if (!function_exists('ploverwp_footer_bar_config')) {
  function ploverwp_footer_bar_config() {
    return [
      [
        'control' => 'color',
        'id' => 'ploverwp_footer_background_color',
        'default' => '#3a3a3a',
        'transport' => 'postMessage',
        'label' => 'Footer Background Color',
        'description' => '',
        'section' => 'section-footer-bar',
      ]
    ];
  }
}