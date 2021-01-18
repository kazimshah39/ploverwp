<?php
/**
* PloverWP Theme validate_callback functions.
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

function footer_widget_layouts_validate($validity, $value) {
  if (!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value) && !empty($value)) {
    $validity->add('invalid_footer_layout', esc_html__('Values format is invalid', 'ploverwp'));
  }


  if (array_sum(explode(',', $value)) > 12) {
    $validity->add('footer_layout_sum_greator', esc_html__('Values sum should not greator than 12', 'ploverwp'));
  }

  if (array_sum(explode(',', $value)) < 12 && $value != 0 && $value != '1,1,1,1,1') {
    $validity->add('footer_layout_sum_smaller', esc_html__('Values sum should be 12', 'ploverwp'));
  }

  if (count(explode(',', $value)) > 5) {
    $validity->add('invalid_footer_layout_length', esc_html__('Max values should be 5', 'ploverwp'));
  }

  return $validity;

}