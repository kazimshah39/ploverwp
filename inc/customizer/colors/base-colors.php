<?php

if (! function_exists('ploverwp_base_colors_config')) {
  function ploverwp_base_colors_config() {
    return [
      'base' => [
        'text' => [
          'control' => 'color',
          'id' => 'ploverwp_text_color',
          'default' => '#353F75',
          'transport' => 'postMessage',
          'label' => 'Text Color',
          'description' => '',
          'section' => 'section-base-colors',
        ],
        'link' => [
          'control' => 'color',
          'id' => 'ploverwp_link_color',
          'default' => '#6635b7',
          'transport' => 'postMessage',
          'label' => 'Link Color',
          'description' => '',
          'section' => 'section-base-colors',
        ],
        'link-hover' => [
          'control' => 'color',
          'id' => 'ploverwp_link_hover_color',
          'default' => '#6635b7',
          'transport' => 'refresh',
          'label' => 'Link Hover Color',
          'description' => '',
          'section' => 'section-base-colors',
        ],
        'heading' => [
          'control' => 'color',
          'id' => 'ploverwp_heading_color',
          'default' => '',
          'transport' => 'postMessage',
          'label' => 'Heading Color',
          'description' => '',
          'section' => 'section-base-colors',
        ],
        'background' => [
          'control' => 'color',
          'id' => 'ploverwp_background_color',
          'default' => '',
          'transport' => 'postMessage',
          'label' => 'Background Color',
          'description' => '',
          'section' => 'section-base-colors',
        ]
      ]
    ];
  }
}