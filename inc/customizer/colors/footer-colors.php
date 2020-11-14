<?php
$wp_customize->add_section(
  'section-footer-colors',
  array(
    'title' => __('Footer', 'ploverwp'),
    'priority' => 3,
    'panel' => 'panel-colors'
  )
);


// Footer Background Color
$wp_customize->add_setting(
  'ploverwp_footer_background_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_footer_background_color',
    array(
      'label' => __('Footer Background Color', 'ploverwp'),
      'section' => 'section-footer-colors',
    )
  )
);