<?php
/**
* PloverWP Custom CSS
*
* @package PloverWP WordPress theme
*/

if (! function_exists('twentytwenty_generate_css')) {

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
    // Global > Colors

    // Get Variables
    $primary_color = sanitize_hex_color(get_theme_mod('primary_color'));
    $text_color = sanitize_hex_color(get_theme_mod('text_color'));
    $link_color = sanitize_hex_color(get_theme_mod('link_color'));
    $link_hover_color = sanitize_hex_color(get_theme_mod('link_hover_color'));
    $heading_color = sanitize_hex_color(get_theme_mod('heading_color'));
    $background_color = sanitize_hex_color(get_theme_mod('site_background_color'));
    $header_background_color = sanitize_hex_color(get_theme_mod('header_background_color'));
    $footer_background_color = sanitize_hex_color(get_theme_mod('footer_background_color'));


  }
}