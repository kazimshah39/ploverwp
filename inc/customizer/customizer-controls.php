<?php
/**
* PloverWP Theme Customizer Controls.
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$control_dir = get_template_directory() . '/inc/customizer/custom-controls';

require $control_dir . '/class-ploverwp-divider-control.php';