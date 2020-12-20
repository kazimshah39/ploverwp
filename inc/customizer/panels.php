<?php


// General
$wp_customize->add_panel(
  'panel-colors',
  [
    'title' => __('General', 'ploverwp'),
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ]
);

// Header
$wp_customize->add_panel(
  'panel-header',
  [
    'title' => __('Header', 'ploverwp'),
    'priority' => 2,
    'capability' => 'edit_theme_options',
  ]
);

// Footer
$wp_customize->add_panel(
  'panel-footer',
  [
    'title' => __('Footer', 'ploverwp'),
    'priority' => 3,
    'capability' => 'edit_theme_options',
  ]
);