<?php

// Include Sections
require get_template_directory() . '/inc/customizer/config/get_sections.php';

// Include Settings & Controls
require get_template_directory() . '/inc/customizer/config/get_settings_and_controls.php';



if (! function_exists('ploverwp_customizer_config')) {
  function ploverwp_customizer_config($wp_customize) {

    // add_panel

    require get_template_directory() . '/inc/customizer/panels.php';


    // add_section

    foreach (ploverwp_get_sections() as $nested) {
      foreach ($nested as $section) {

        $wp_customize->add_section(
          $section['id'],
          [
            'title' => __($section['title'], 'ploverwp'),
            'priority' => $section['priority'],
            'panel' => $section['panel']
          ]
        );

      }
    }

    // add_setting & add_control

    foreach (ploverwp_get_settings_and_controls() as $nested) {
      foreach ($nested as $val) {

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
        }

      }
    }


  }
}