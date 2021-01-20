<?php

if (!function_exists('ploverwp_sticky_header_config')) {
  function ploverwp_sticky_header_config() {
    return [
      [
        'control' => '1',
        'type' => 'checkbox',
        'id' => 'ploverwp_sticky_header_status',
        'transport' => 'refresh',
        'label' => 'Enable Sticky Header',
        'section' => 'section-sticky-header',
      ],
      [
        'control' => '1',
        'type' => 'checkbox',
        'id' => 'ploverwp_sticky_header_shrink',
        'transport' => 'refresh',
        'label' => 'Enable Shrink Effect',
        'section' => 'section-sticky-header',
      ],
      [
        'control' => '1',
        'type' => 'select',
        'id' => 'ploverwp_sticky_header_location',
        'transport' => 'refresh',
        'label' => 'Enable On',
        'default' => 'desktop',
        'choices' => [
          'desktop' => 'Desktop',
          'mobile' => 'Mobile',
          'both' => 'Desktop + Mobile'
        ],
        'section' => 'section-sticky-header',
      ],
    ];
  }
}