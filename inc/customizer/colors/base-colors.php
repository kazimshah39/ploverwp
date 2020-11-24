<?php

if (! function_exists('ploverwp_base_colors_config')) {
  function ploverwp_base_colors_config() {
    return [
      'base' => [
        'text' => [
          'id' => 'ploverwp_text_color',
          'default' => '#353F75',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Text Color',
          'section' => 'section-base-colors',
        ],
        'link' => [
          'id' => 'ploverwp_link_color',
          'default' => '#6635b7',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Link Color',
          'section' => 'section-base-colors',
        ],
        'link-hover' => [
          'id' => 'ploverwp_link_hover_color',
          'default' => '#6635b7',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'refresh',
          'label' => 'Link Hover Color',
          'section' => 'section-base-colors',
        ],
        'heading' => [
          'id' => 'ploverwp_heading_color',
          'default' => '',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Heading Color',
          'section' => 'section-base-colors',
        ],
        'background' => [
          'id' => 'ploverwp_background_color',
          'default' => '',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Background Color',
          'section' => 'section-base-colors',
        ]
      ]
    ];
  }
}