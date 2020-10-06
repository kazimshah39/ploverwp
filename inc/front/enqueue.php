<?php

function ploverwp_register_scripts() {

  // Add bootstrap css
  wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/all.min.css'), array(), microtime());
  wp_enqueue_style('ploverwp-style', get_stylesheet_uri(), array(), microtime());
  wp_enqueue_style('ploverwp-bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), microtime());
  wp_enqueue_style('ploverwp-sidebar-css', get_theme_file_uri('/assets/css/sidebar.css'), array(), microtime());

  // Add bootstrap js
  wp_enqueue_script('header-js', get_theme_file_uri('/assets/js/header.js'), array('jquery'), microtime(), true);
  wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), microtime(), true);

}