<?php

if (!function_exists('ploverwp_footer_sections')) {
  function ploverwp_footer_sections() {
    return [
      [
        'id' => 'section-footer-widgets',
        'title' => 'Footer Widgets',
        'priority' => 1,
        'panel' => 'panel-footer',
      ],
      [
        'id' => 'section-footer-bar',
        'title' => 'Footer Bar',
        'priority' => 2,
        'panel' => 'panel-footer',
      ],
    ];
  }
}