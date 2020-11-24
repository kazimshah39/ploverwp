<?php

if (! function_exists('ploverwp_colors_sections')) {
  function ploverwp_colors_sections() {
    return [
      'colors' => [
        'base' => [
          'id' => 'section-base-colors',
          'title' => 'Base',
          'priority' => 1,
          'panel' => 'panel-colors',
        ],
        'header' => [
          'id' => 'section-header-colors',
          'title' => 'Header',
          'priority' => 2,
          'panel' => 'panel-colors',
        ],
        'footer' => [
          'id' => 'section-footer-colors',
          'title' => 'Footer',
          'priority' => 3,
          'panel' => 'panel-colors',
        ],
      ],
    ];
  }
}