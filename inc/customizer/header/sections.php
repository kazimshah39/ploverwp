<?php

if (!function_exists('ploverwp_header_sections')) {
  function ploverwp_header_sections()
  {
    return [
      [
        'id' => 'section-primary-header',
        'title' => 'Primary Header',
        'priority' => 1,
        'panel' => 'panel-header',
      ],
      [
        'id' => 'section-sticky-header',
        'title' => 'Sticky Header',
        'priority' => 2,
        'panel' => 'panel-header',
      ],
    ];
  }
}
