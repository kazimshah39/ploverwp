<?php

// Include Sections
require get_template_directory() . '/inc/customizer/config/get_sections.php';

// Include Settings & Controls
require get_template_directory() . '/inc/customizer/config/get_settings_and_controls.php';

// Include validate_callback
require get_template_directory() . '/inc/customizer/validate_callback.php';


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

        case "color":

          $wp_customize->add_setting(
            $val['id'],
            [
              'default' => $val['default'],
              'sanitize_callback' => 'sanitize_hex_color',
              'transport' => $val['transport'],
            ]
          );

          $wp_customize->add_control(
            new WP_Customize_Color_Control(
              $wp_customize,
              $val['id'],
              [
                'label' => __($val['label'], 'ploverwp'),
                'description' => __($val['description'], 'ploverwp'),
                'section' => $val['section'],
              ]
            )
          );

          break;

        case "checkbox":

          $wp_customize->add_setting(
            $val['id'],
            [
              //  'default' => 0,
              // 'sanitize_callback' => 'sanitize_hex_color',
              'transport' => $val['transport'],
            ]
          );


          $wp_customize->add_control(
            $val['id'],
            [
              'type' => 'checkbox',
              'label' => __($val['label'], 'ploverwp'),
              'description' => __($val['description'], 'ploverwp'),
              'section' => $val['section']
            ]
          );

          break;

        case "select":

          $wp_customize->add_setting(
            $val['id'],
            [
              'default' => $val['default'],
              // 'sanitize_callback' => 'sanitize_hex_color',
              'transport' => $val['transport'],
            ]
          );


          $wp_customize->add_control(
            $val['id'],
            [
              'type' => 'select',
              'label' => __($val['label'], 'ploverwp'),
              'description' => __($val['description'], 'ploverwp'),
              'choices' => $val['choices'],
              'section' => $val['section']
            ]
          );

          break;

        case "divider":

          $wp_customize->add_control(new PloverWP_Control_Divider(
            $wp_customize, $val['id'],
            [
              'label' => __($val['label'], 'ploverwp'),
              'section' => $val['section'],
              'settings' => []
            ]
          ));

          break;

        case "footer-widgets-layout":

          $wp_customize->add_setting(
            $val['id'],
            [
              'default' => $val['default'],
              // 'sanitize_callback' => 'sanitize_hex_color',
              'transport' => $val['transport'],
              'validate_callback' => $val['validate_callback'],
            ]
          );


          $wp_customize->add_control(new PloverWP_Footer_Widgets_Layout_Control(
            $wp_customize, $val['id'],
            [
              'choices' => $val['choices'],
              'section' => $val['section']
            ]
          ));

          break;

        case "popover":

          $wp_customize->add_control(new PloverWP_Control_Popover(
            $wp_customize, $val['id'],
            [
              'content' => $val['content'],
              'section' => $val['section'],
              'settings' => []
            ]
          ));

          break;
      }
    }


  }
}