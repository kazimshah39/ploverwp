<?php

// Global
$wp_customize->add_panel(
  'panel-global',
  array(
    'title' => __('Global', 'ploverwp'),
    'priority' => 1,
    'capability' => 'edit_theme_options',
  )
);

// Colors

$wp_customize->add_panel(
  'panel-colors',
  array(
    'title' => __('Colors', 'ploverwp'),
    'priority' => 2,
    'capability' => 'edit_theme_options',
  )
);