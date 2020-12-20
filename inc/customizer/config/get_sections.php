<?php

// General
require get_template_directory() . '/inc/customizer/general/sections.php';

// Header
require get_template_directory() . '/inc/customizer/header/sections.php';

// Footer
require get_template_directory() . '/inc/customizer/footer/sections.php';



if (!function_exists('ploverwp_get_sections')) {


  function ploverwp_get_sections()
  {

    return array_merge(
      ploverwp_colors_sections(),
      ploverwp_header_sections(),
      ploverwp_footer_sections(),
    );
  }
}
