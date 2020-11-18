<?php

if (! function_exists('ploverwp_header_colors_config')) {
  function ploverwp_header_colors_config() {
    return array(
      'header' => array(
        'background' => array(
          'id' => 'ploverwp_header_background_color',
          'default' => '#333333',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Header Background Color',
          'section' => 'section-header-colors',
        )
      )
    );
  }
}