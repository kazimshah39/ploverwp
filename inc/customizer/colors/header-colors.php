<?php
$wp_customize->add_section(
  'section-header-colors',
  array(
    'title' => __('Header', 'ploverwp'),
    'priority' => 2,
    'panel' => 'panel-colors'
  )
);



// Header Background Color
$wp_customize->add_setting(
  'ploverwp_header_background_color',
  array(
    'default' => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_header_background_color',
    array(
      'label' => __('Header Background Color', 'ploverwp'),
      'section' => 'section-header-colors',
    )
  )
);