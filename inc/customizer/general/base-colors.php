<?php

if (! function_exists('ploverwp_base_colors_config')) {
  function ploverwp_base_colors_config() {
    return [
      [
        'control' => '2',
        'id' => 'ploverwp_text_color',
        'default' => '#353F75',
        'transport' => 'postMessage',
        'label' => 'Text Color',
        'section' => 'section-base-colors',
      ],
      [
        'control' => '2',
        'id' => 'ploverwp_link_color',
        'default' => '#6635b7',
        'transport' => 'postMessage',
        'label' => 'Link Color',
        'section' => 'section-base-colors',
      ],
      [
        'control' => '2',
        'id' => 'ploverwp_link_hover_color',
        'default' => '#6635b7',
        'transport' => 'refresh',
        'label' => 'Link Hover Color',
        'section' => 'section-base-colors',
      ],
      [
        'control' => '2',
        'id' => 'ploverwp_heading_color',
        'transport' => 'postMessage',
        'label' => 'Heading Color',
        'section' => 'section-base-colors',
      ],
      [
        'control' => '2',
        'id' => 'ploverwp_content_area_background_color',
        'transport' => 'postMessage',
        'label' => 'Content Area Background Color',
        'section' => 'section-base-colors',
      ],
      [
        'control' => '2',
        'id' => 'ploverwp_base_background_color',
        'transport' => 'postMessage',
        'label' => 'Base Background Color',
        'section' => 'section-base-colors',
      ]
    ];
  }
}