<?php

if (!function_exists('ploverwp_colors_sections')) {
  function ploverwp_colors_sections()
  {
    return [
      [
        'id' => 'section-base-colors',
        'title' => 'Base Colors',
        'priority' => 1,
        'panel' => 'panel-colors',
      ],
    ];
  }
}
