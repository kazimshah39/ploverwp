<?php


// Colors

$wp_customize->add_panel(
  'panel-colors',
  [
    'title' => __('Colors', 'ploverwp'),
    'priority' => 2,
    'capability' => 'edit_theme_options',
  ]
);

// Header

$wp_customize->add_panel(
  'panel-header',
  [
    'title' => __('Header', 'ploverwp'),
    'priority' => 3,
    'capability' => 'edit_theme_options',
  ]
);