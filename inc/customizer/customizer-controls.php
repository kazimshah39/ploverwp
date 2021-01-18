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

require $control_dir . '/divider.php';
require $control_dir . '/footer-widgets-layout.php';
require $control_dir . '/popover.php';
require $control_dir . '/radio-image.php';