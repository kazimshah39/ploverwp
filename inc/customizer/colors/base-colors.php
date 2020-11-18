<?php

if (! function_exists('ploverwp_base_colors_config')) {
  function ploverwp_base_colors_config() {
    return array(
      'base' => array(
        'text' => array(
          'id' => 'ploverwp_text_color',
          'default' => '#353F75',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Text Color',
          'section' => 'section-base-colors',
        ),
        'link' => array(
          'id' => 'ploverwp_link_color',
          'default' => '#6635b7',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Link Color',
          'section' => 'section-base-colors',
        ),
        'link-hover' => array(
          'id' => 'ploverwp_link_hover_color',
          'default' => '#6635b7',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'refresh',
          'label' => 'Link Hover Color',
          'section' => 'section-base-colors',
        ),
        'heading' => array(
          'id' => 'ploverwp_heading_color',
          'default' => '',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Heading Color',
          'section' => 'section-base-colors',
        ),
        'background' => array(
          'id' => 'ploverwp_background_color',
          'default' => '',
          'sanitize' => 'sanitize_hex_color',
          'transport' => 'postMessage',
          'label' => 'Background Color',
          'section' => 'section-base-colors',
        )
      )
    );
  }
}