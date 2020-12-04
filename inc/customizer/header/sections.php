<?php

if (! function_exists('ploverwp_header_sections')) {
  function ploverwp_header_sections() {
    return [
      'header' => [
        'sticky' => [
          'id' => 'section-sticky-header',
          'title' => 'Sticky Header',
          'priority' => 1,
          'panel' => 'panel-header',
        ],
      ],
    ];
  }
}