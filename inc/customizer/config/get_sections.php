<?php

// Colors
require get_template_directory() . '/inc/customizer/colors/sections.php';

// Header
require get_template_directory() . '/inc/customizer/header/sections.php';



if (! function_exists('ploverwp_get_sections')) {


  function ploverwp_get_sections() {

    return array_merge(
      ploverwp_colors_sections(),
      ploverwp_header_sections()
    );

  }
}