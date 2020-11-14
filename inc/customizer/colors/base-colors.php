<?php
$wp_customize->add_section(
  'section-base-colors',
  array(
    'title' => __('Base', 'ploverwp'),
    'priority' => 1,
    'panel' => 'panel-colors'
  )
);



// Primary Color
$wp_customize->add_setting(
  'ploverwp_primary_color',
  array(
    'default' => '#28a745',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_primary_color',
    array(
      'label' => __('Primary Color', 'ploverwp'),
      'section' => 'section-base-colors',
    )
  )
);

// Text Color
$wp_customize->add_setting(
  'ploverwp_text_color',
  array(
    'default' => '#353F75',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_text_color',
    array(
      'label' => __('Text Color', 'ploverwp'),
      'section' => 'section-base-colors',
    )
  )
);

// Link Color
$wp_customize->add_setting(
  'ploverwp_link_color',
  array(
    'default' => '#6635b7',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_link_color',
    array(
      'label' => __('Link Color', 'ploverwp'),
      'section' => 'section-base-colors',
    )
  )
);

// Link Hover Color

$wp_customize->add_setting(
  'ploverwp_link_hover_color',
  array(
    'default' => '#6635b7',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_link_hover_color',
    array(
      'label' => __('Link Hover Color', 'ploverwp'),
      'section' => 'section-base-colors',
    )
  )
);

// Heading Color

$wp_customize->add_setting(
  'ploverwp_heading_color',
  array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_heading_color',
    array(
      'label' => __('Heading Color', 'ploverwp'),
      'section' => 'section-base-colors',
    )
  )
);

// Background Color
$wp_customize->add_setting(
  'ploverwp_background_color',
  array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'ploverwp_background_color',
    array(
      'label' => __('Background Color', 'ploverwp'),
      'section' => 'section-base-colors',
    )
  )
);