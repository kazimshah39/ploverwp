<?php

require get_template_directory() . '/inc/customizer/colors/base-colors.php';
require get_template_directory() . '/inc/customizer/colors/header-colors.php';
require get_template_directory() . '/inc/customizer/colors/footer-colors.php';


if (! function_exists('ploverwp_get_settings_and_controls')) {

  function ploverwp_get_settings_and_controls() {

    return array_merge(
      ploverwp_base_colors_config(),
      ploverwp_header_colors_config(),
      ploverwp_footer_colors_config(),
    );

  }
}