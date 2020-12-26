<?php


function ploverwp_customizer_scripts()
{
  wp_enqueue_style('ploverwp-customizer-css', get_theme_file_uri('/assets/css/admin/customizer.css'), [], microtime());
  wp_enqueue_script('ploverwp-customizer-js', get_theme_file_uri('/assets/js/admin/customizer.js'), [], microtime());
}
