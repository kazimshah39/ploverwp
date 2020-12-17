<?php

if (!function_exists('ploverwp_sticky_header_config')) {
  function ploverwp_sticky_header_config()
  {
    return [
      [
        'control' => 'checkbox',
        'id' => 'ploverwp_sticky_header_status',
        'transport' => 'refresh',
        'label' => 'Enable Sticky Header',
        'description' => '',
        'section' => 'section-sticky-header',
      ],
      [
        'control' => 'checkbox',
        'id' => 'ploverwp_sticky_header_shrink',
        'transport' => 'refresh',
        'label' => 'Enable Shrink Effect',
        'description' => '',
        'section' => 'section-sticky-header',
      ],
      [
        'control' => 'select',
        'id' => 'ploverwp_sticky_header_location',
        'transport' => 'refresh',
        'label' => 'Enable On',
        'description' => '',
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
