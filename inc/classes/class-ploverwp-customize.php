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

      /**
      * Global Panel
      * => Colors Section
      */



      // Include Panels
      require get_template_directory() . '/inc/customizer/panels.php';

      // Include Colors Section (Global Panel)
      require get_template_directory() . '/inc/customizer/global/colors.php';
    }
  }

  // Setup the Theme Customizer settings and controls.

  add_action('customize_register', array('PloverWP_Customize', 'register'));

}