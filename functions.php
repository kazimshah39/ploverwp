<?php

// Includes
require_once(get_theme_file_path('/inc/front/enqueue.php'));

require_once(get_theme_file_path('/inc/setup.php'));

require_once(get_theme_file_path('/inc/widgets.php'));

/**
* Hooks
*/

add_action('wp_enqueue_scripts', 'ploverwp_register_scripts');

add_action('after_setup_theme', 'ploverwp_setup_theme');

add_action('widgets_init', 'ploverwp_widgets');


/**
* REQUIRED FILES
* Include required files.
*/

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/components/entry-meta-output.php';

// Handle Customizer settings.
require get_template_directory() . '/inc/classes/class-ploverwp-customize.php';


// For Development

function show_template() {
  if (is_super_admin()) {
    global $template;
    print_r($template);
  }
}
add_action('wp_footer', 'show_template');