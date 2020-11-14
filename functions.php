<?php

/**
* REQUIRED FILES
* Include required files.
*/

require get_template_directory() . '/inc/front/enqueue.php';

require get_template_directory() . '/inc/setup.php';

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/components/entry-meta-output.php';

require get_template_directory() . '/inc/classes/class-ploverwp-customize.php';

require get_template_directory() . '/inc/customizer/enqueue.php';

/**
* Hooks
*/

add_action('wp_enqueue_scripts', 'ploverwp_register_scripts');

add_action('after_setup_theme', 'ploverwp_setup_theme');

add_action('widgets_init', 'ploverwp_widgets');

add_action('customize_preview_init', 'ploverwp__customize_preview_init');


// For Development

function show_template() {
  if (is_super_admin()) {
    global $template;
    print_r($template);
  }
}
add_action('wp_footer', 'show_template');

// ***

function ploverwp_get_elements_array() {

  return $elements = array(
    'content' => array(
      'text' => array(
        'setting' => 'ploverwp_text_color',
        'style' => 'color',
        'el' => '#site-content, .entry-title a, .entry-title a:hover',
      ),
      'link' => array(
        'setting' => 'ploverwp_link_color',
        'style' => 'color',
        'el' => 'a',
      ),
      'link-hover' => array(
        'setting' => 'ploverwp_link_hover_color',
        'style' => 'color',
        'el' => 'a:hover',
      ),
      'heading' => array(
        'setting' => 'ploverwp_heading_color',
        'style' => 'color',
        'el' => 'h1,h2,h3,h4,h5,h6',
      ),
      'background' => array(
        'setting' => 'ploverwp_background_color',
        'style' => 'background-color',
        'el' => '#site-content',
      ),
    ),
    'header' => array(
      'background' => array(
        'setting' => 'ploverwp_header_background_color',
        'style' => 'background-color',
        'el' => '#header',
      ),
    ),
    'footer' => array(
      'background' => array(
        'setting' => 'ploverwp_footer_background_color',
        'style' => 'background-color',
        'el' => '#footer',
      ),
    ),
  );
}

function ploverwp_customize_preview_init() {
  $theme_version = wp_get_theme()->get('Version');

  wp_localize_script('ploverwp_customizer', 'ploverwpPreviewEls', ploverwp_get_elements_array());


}

add_action('customize_preview_init', 'ploverwp_customize_preview_init');