<?php

/**

* Customizer settings for this theme.
*
* @package PloverWP
*/

if (! class_exists('PloverWP_Customize')) {
  /**
  * CUSTOMIZER SETTINGS
  */
  class PloverWP_Customize {

    /**
    * Register customizer options.
    *
    * @param WP_Customize_Manager $wp_customize Theme Customizer object.
    */
    public static function register($wp_customize) {

      // Include Panels
      require get_template_directory() . '/inc/customizer/panels.php';

      /**
      * Colors Panel
      */

      // Include Base Section (Colors Panel)
      require get_template_directory() . '/inc/customizer/colors/base-colors.php';

      // Include Header Section (Colors Panel)
      require get_template_directory() . '/inc/customizer/colors/header-colors.php';

      // Include Footer Section (Colors Panel)
      require get_template_directory() . '/inc/customizer/colors/footer-colors.php';

    }
  }

  // Setup the Theme Customizer settings and controls.

  add_action('customize_register', array('PloverWP_Customize', 'register'));

}