<?php

function ploverwp_setup_theme() {

  register_nav_menu('primary', __('Primary', 'ploverwp'));

  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));

  require_once get_theme_file_path('/inc/svg.php');

}