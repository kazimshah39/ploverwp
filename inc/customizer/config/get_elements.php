<?php

// General
require get_template_directory() . '/inc/customizer/general/custom-css/base-colors-el.php';

// Header
require get_template_directory() . '/inc/customizer/header/custom-css/primary-header-colors-el.php';
require get_template_directory() . '/inc/customizer/header/custom-css/sticky-header-colors-el.php';

// Footer
require get_template_directory() . '/inc/customizer/footer/custom-css/footer-bar-el.php';


if (!function_exists('ploverwp_get_elements')) {

  function ploverwp_get_elements()
  {

    return array_merge(
      ploverwp_base_colors_el(),
      ploverwp_primary_header_colors_el(),
      ploverwp_sticky_header_colors_el(),
      ploverwp_footer_bar_el(),
    );
  }
}
