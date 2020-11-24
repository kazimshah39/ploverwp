<?php

// Custom CSS
require get_template_directory() . '/inc/customizer/custom-css.php';


function ploverwp_register_scripts() {

  // Add bootstrap css
  wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/all.min.css'), [], microtime());
  wp_enqueue_style('ploverwp-bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), [], microtime());
  wp_enqueue_style('ploverwp-sidebar-css', get_theme_file_uri('/assets/css/sidebar.css'), [], microtime());
  wp_enqueue_style('ploverwp-style', get_stylesheet_uri(), [], microtime());
  wp_add_inline_style('ploverwp-style', ploverwp_get_customizer_css());

  // Add bootstrap js
  wp_enqueue_script('header-js', get_theme_file_uri('/assets/js/header.js'), ['jquery'], microtime(), true);
  wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), ['jquery'], microtime(), true);

}