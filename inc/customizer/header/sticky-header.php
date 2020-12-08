<?php

if (! function_exists('ploverwp_sticky_header_config')) {
  function ploverwp_sticky_header_config() {
    return [
      [
        'control' => 'checkbox',
        'id' => 'ploverwp_sticky_header_status',
        'transport' => 'postMessage',
        'label' => 'Enable Sticky Header',
        'description' => '',
        'section' => 'section-sticky-header',
      ],
    ];
  }
}