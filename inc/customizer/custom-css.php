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
    // Colors > Base

    // Get Variables
    $primary_color = sanitize_hex_color(get_theme_mod('ploverwp_primary_color'));
    $text_color = sanitize_hex_color(get_theme_mod('ploverwp_text_color'));
    $link_color = sanitize_hex_color(get_theme_mod('ploverwp_link_color'));
    $link_hover_color = sanitize_hex_color(get_theme_mod('ploverwp_link_hover_color'));
    $heading_color = sanitize_hex_color(get_theme_mod('ploverwp_heading_color'));
    $background_color = sanitize_hex_color(get_theme_mod('ploverwp_background_color'));

    // Colors > Header
    $header_background_color = sanitize_hex_color(get_theme_mod('ploverwp_header_background_color'));

    // Colors > Footer
    $footer_background_color = sanitize_hex_color(get_theme_mod('ploverwp_footer_background_color'));

    // Get Element
    function ploverwp_get_elements($a, $b, $c) {
      return ploverwp_get_elements_array()[$a][$b][$c];
    }

    ob_start();
    // Colors > Base
    ploverwp_generate_css('jjj', 'color', $primary_color);
    ploverwp_generate_css(ploverwp_get_elements('content', 'text', 'el'), 'color', $text_color);
    ploverwp_generate_css(ploverwp_get_elements('content', 'link', 'el'), 'color', $link_color);
    ploverwp_generate_css(ploverwp_get_elements('content', 'link-hover', 'el'), 'color', $link_hover_color);
    ploverwp_generate_css(ploverwp_get_elements('content', 'heading', 'el'), 'color', $heading_color);
    ploverwp_generate_css(ploverwp_get_elements('content', 'background', 'el'), 'background', $background_color);

    // Colors > Header
    ploverwp_generate_css(ploverwp_get_elements('header', 'background', 'el'), 'background', $header_background_color);

    // Colors > Footer
    ploverwp_generate_css(ploverwp_get_elements('footer', 'background', 'el'), 'background', $footer_background_color);

    // Return the results.
    return ob_get_clean();
  }
}