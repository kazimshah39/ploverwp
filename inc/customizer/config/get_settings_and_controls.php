<?php

// General
require get_template_directory() . '/inc/customizer/general/base-colors.php';

// Header
require get_template_directory() . '/inc/customizer/header/primary-header.php';
require get_template_directory() . '/inc/customizer/header/primary-header-colors.php';
require get_template_directory() . '/inc/customizer/header/sticky-header.php';
require get_template_directory() . '/inc/customizer/header/sticky-header-colors.php';

// Footer
require get_template_directory() . '/inc/customizer/footer/footer-widgets.php';
require get_template_directory() . '/inc/customizer/footer/footer-bar.php';



if (!function_exists('ploverwp_get_settings_and_controls')) {

  function ploverwp_get_settings_and_controls() {

    return array_merge(
      ploverwp_base_colors_config(),
      ploverwp_primary_header_config(),
      ploverwp_primary_header_colors_config(),
      ploverwp_sticky_header_config(),
      ploverwp_sticky_header_colors_config(),
      ploverwp_footer_widgets_config(),
      ploverwp_footer_bar_config(),
    );
  }
}