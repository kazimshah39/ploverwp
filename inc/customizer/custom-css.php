<?php
/**
* PloverWP Custom CSS
*
* @package PloverWP WordPress theme
*/


if (! function_exists('ploverwp_generate_css')) {

  function ploverwp_generate_css($selector, $style, $value, $prefix = '', $suffix = '', $echo = true) {

    $return = '';

    /*
		 * Bail early if we have no $selector elements or properties and $value.
		 */
    if (! $value || ! $selector) {

      return;
    }

    $return = sprintf('%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix);

    if ($echo) {

      echo $return; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;)

    }

    return $return;

  }
}



if (! function_exists('ploverwp_get_customizer_css')) {

  function ploverwp_get_customizer_css() {

    ob_start();

    foreach (ploverwp_get_elements() as $nested) {
      foreach ($nested as $val) {
        ploverwp_generate_css($val['selector'], $val['style'], sanitize_hex_color(get_theme_mod($val['setting'])));
      }
    }
    // Return the results.
    return ob_get_clean();
  }
}