<?php

/**
* REQUIRED FILES
* Include required files.
*/

require get_template_directory() . '/inc/front-end/enqueue.php';

require get_template_directory() . '/inc/back-end/enqueue.php';

require get_template_directory() . '/inc/setup.php';

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/components/entry-meta-output.php';

require get_template_directory() . '/inc/customizer/config/get_elements.php';

require get_template_directory() . '/inc/customizer/customizer-config.php';

require get_template_directory() . '/inc/customizer/enqueue.php';


/**
* Hooks
*/

add_action('wp_enqueue_scripts', 'ploverwp_front_end_scripts');

add_action('admin_enqueue_scripts', 'ploverwp_back_end_scripts');

add_action('after_setup_theme', 'ploverwp_setup_theme');

add_action('widgets_init', 'ploverwp_widgets');

add_action('customize_preview_init', 'ploverwp__customize_preview_init');

add_action('customize_register', 'ploverwp_customizer_config');

// Body Classes

add_filter('body_class', function ($classes) {
  if (get_theme_mod('ploverwp_sticky_header_status')) {
    $classes[] = 'sticky-header-enabled';
  }
  return $classes;
});

// For Development

function show_template() {
  if (is_super_admin()) {
    global $template;
    print_r($template);

  }
}
add_action('wp_footer', 'show_template');

// ***

//remove_theme_mods();
/*
foreach (ploverwp_get_settings_and_controls() as $hh) {
  foreach ($hh as $jj) {
    // print_r($hh);
    echo $jj['id'];
    echo "<hr>";
  }
}
*/
//print_r(ploverwp_get_elements());
//echo ploverwp_get_elements()['style'];