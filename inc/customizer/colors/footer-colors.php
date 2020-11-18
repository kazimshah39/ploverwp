<?php

if (! function_exists('ploverwp_footer_colors_config')) {
  function ploverwp_footer_colors_config() {
    return array(
      'footer' => array(
        'background' => array(
          'id' => 'ploverwp_footer_background_color',
          'default' => '#ffffff',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Footer Background Color',
          'section' => 'section-footer-colors',
        )
      )
    );
  }
}