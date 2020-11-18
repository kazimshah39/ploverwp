<?php


// Colors

$wp_customize->add_panel(
  'panel-colors',
  array(
    'title' => __('Colors', 'ploverwp'),
    'priority' => 2,
    'capability' => 'edit_theme_options',
  )
);