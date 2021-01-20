<?php

// Include Sections
require get_template_directory() . '/inc/customizer/config/get_sections.php';

// Include Settings & Controls
require get_template_directory() . '/inc/customizer/config/get_settings_and_controls.php';

// Include validate_callback
require get_template_directory() . '/inc/customizer/validate_callback.php';

// Include Partials
require get_template_directory() . '/inc/customizer/config/get_partials.php';


if (! function_exists('ploverwp_customizer_config')) {
  function ploverwp_customizer_config($wp_customize) {

    // Customizer Custom Controls

    require get_template_directory() . '/inc/customizer/customizer-controls.php';

    // add_panel

    require get_template_directory() . '/inc/customizer/panels.php';


    // add_section

    foreach (ploverwp_get_sections() as $section) {

      $wp_customize->add_section(
        $section['id'],
        [
          'title' => __($section['title'], 'ploverwp'),
          'priority' => $section['priority'],
          'panel' => $section['panel']
        ]
      );
    }

    // add_setting & add_control

    foreach (ploverwp_get_settings_and_controls() as $val) {


      switch ($val['control']) {
        case "1":
          $val['control'] = 'WP_Customize_Control';
          break;
        case "2":
          $val['control'] = 'WP_Customize_Color_Control';
          break;
        case "3":
          $val['control'] = 'PloverWP_Control_Divider';
          break;
        case "4":
          $val['control'] = 'PloverWP_Footer_Widgets_Layout_Control';
          break;
        case "5":
          $val['control'] = 'PloverWP_Control_Popover';
          break;
        case "6":
          $val['control'] = 'PloverWP_Control_Radio_Image';
          break;
      }


      $wp_customize->add_setting(
        $val['id'],
        [
          'default' => $val['default'] ?? '',
          // 'sanitize_callback' => 'sanitize_hex_color',
          'transport' => $val['transport'] ?? '',
          'validate_callback' => $val['validate_callback'] ?? '',
        ]
      );

      $wp_customize->add_control(
        new $val['control'](
          $wp_customize,
          $val['id'],
          [
            isset($val['type']) ? 'type' : '' => $val['type'] ?? '',
            'label' => __($val['label'] ?? '', 'ploverwp'),
            'description' => __($val['description'] ?? '', 'ploverwp'),
            'choices' => $val['choices'] ?? '',
            isset($val['content']) ? 'content' : '' => $val['content'] ?? '',
            'section' => $val['section'],
          ]
        )
      );

    }

    // add_partial

    /* Change transport for Site Title & Description. */
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    /**/

    foreach (ploverwp_get_partials() as $partial) {

      $wp_customize->selective_refresh->add_partial(
        $partial['id'],
        [
          'selector' => $partial['selector'],
          'container_inclusive' => $partial['container_inclusive'],
          'render_callback' => $partial['render_callback']
        ]
      );
    }


  }
}