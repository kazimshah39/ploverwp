<?php

function ploverwp_setup_theme() {

  register_nav_menu('primary', __('Primary', 'ploverwp'));

  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
  add_theme_support('customize-selective-refresh-widgets');
  add_theme_support('custom-logo', [
    'width' => 180,
    'height' => 60,
    'flex-width' => true,
    'flex-height' => true
  ]);
  add_theme_support('woocommerce');
}