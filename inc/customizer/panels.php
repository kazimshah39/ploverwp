<?php

$wp_customize->add_panel(
  'panel-global',
  array(
    'title' => __('Global', 'ploverwp'),
    'priority' => 10,
    'capability' => 'edit_theme_options',
  )
);