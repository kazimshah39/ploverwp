<?php

function ploverwp_widgets() {
  // Main Sidebar
  register_sidebar([
    'name' => esc_html__('Sidebar', 'ploverwp'),
    'id' => 'ploverwp_sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>'
  ]);

  // Footer Widget Area 1
  register_sidebar([
    'name' => esc_html__('Footer Widget Area 1', 'ploverwp'),
    'id' => 'ploverwp_footer_widget_area_1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ]);

  // Footer Widget Area 2
  register_sidebar([
    'name' => esc_html__('Footer Widget Area 2', 'ploverwp'),
    'id' => 'ploverwp_footer_widget_area_2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ]);

  // Footer Widget Area 3
  register_sidebar([
    'name' => esc_html__('Footer Widget Area 3', 'ploverwp'),
    'id' => 'ploverwp_footer_widget_area_3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ]);

  // Footer Widget Area 4
  register_sidebar([
    'name' => esc_html__('Footer Widget Area 4', 'ploverwp'),
    'id' => 'ploverwp_footer_widget_area_4',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ]);

  // Footer Widget Area 5
  register_sidebar([
    'name' => esc_html__('Footer Widget Area 5', 'ploverwp'),
    'id' => 'ploverwp_footer_widget_area_5',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ]);
}