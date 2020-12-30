<?php

function ploverwp_setup_theme() {

  register_nav_menu('primary', __('Primary', 'ploverwp'));

  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
  add_theme_support('customize-selective-refresh-widgets');

}