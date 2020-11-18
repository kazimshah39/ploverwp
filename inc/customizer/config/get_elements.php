<?php

require get_template_directory() . '/inc/customizer/colors/custom-css/base-colors-el.php';
require get_template_directory() . '/inc/customizer/colors/custom-css/header-colors-el.php';
require get_template_directory() . '/inc/customizer/colors/custom-css/footer-colors-el.php';


if (! function_exists('ploverwp_get_elements')) {

  function ploverwp_get_elements() {

    return array_merge(
      ploverwp_base_colors_el(),
      ploverwp_header_colors_el(),
      ploverwp_footer_colors_el(),
    );

  }
}