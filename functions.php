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

add_action('customize_controls_enqueue_scripts', 'ploverwp_customizer_scripts');

add_action('after_setup_theme', 'ploverwp_setup_theme');

add_action('widgets_init', 'ploverwp_widgets');

add_action('customize_preview_init', 'ploverwp__customize_preview_init');

add_action('customize_register', 'ploverwp_customizer_config');

// Body Classes

add_filter('body_class', function ($classes) {

  // Add 'sticky header enabled' classes to body
  if (get_theme_mod('ploverwp_sticky_header_status')) {

    $classes[] = 'sticky-header-enabled';
    switch (get_theme_mod('ploverwp_sticky_header_location')) {
      case "mobile":
        $classes[] = 'mobile-sticky-header-enabled';
        break;
      case "desktop":
        $classes[] = 'desktop-sticky-header-enabled';
        break;
      case "both":
        $classes[] = 'all-devices-sticky-header-enabled';
        break;
    }

    // Add 'sticky header shrink' classes to body
    if (get_theme_mod('ploverwp_sticky_header_shrink')) {
      $classes[] = 'sticky-header-shrink';
    }
  }


  return $classes;
});

// For Development

function show_template() {
  if (is_super_admin()) {
    global $template;
    print_r($template);
    echo '<br>';
  }
}
add_action('wp_footer', 'show_template');

// ***

//remove_theme_mods();