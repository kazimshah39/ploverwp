<?php
$wp_customize->add_section(
  'section-colors',
  array(
    'title' => __('Colors', 'ploverwp'),
    'priority' => 10,
    'panel' => 'panel-global'
  )
);


// Primary Color
$wp_customize->add_setting(
  'primary_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'primary_color',
    array(
      'label' => __('Primary Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);

// Text Color
$wp_customize->add_setting(
  'text_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'text_color',
    array(
      'label' => __('Text Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);

// Link Color
$wp_customize->add_setting(
  'link_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'link_color',
    array(
      'label' => __('Link Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);

// Link Hover Color

$wp_customize->add_setting(
  'link_hover_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'link_hover_color',
    array(
      'label' => __('Link Hover Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);

// Heading Color

$wp_customize->add_setting(
  'heading_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'heading_color',
    array(
      'label' => __('Heading Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);

// Background Color
$wp_customize->add_setting(
  'site_background_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'site_background_color',
    array(
      'label' => __('Background Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);

// Header Background Color
$wp_customize->add_setting(
  'header_background_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'header_background_color',
    array(
      'label' => __('Header Background Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);


// Footer Background Color
$wp_customize->add_setting(
  'footer_background_color',
  array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage',
  )
);

$wp_customize->add_control(

  new WP_Customize_Color_Control(

    $wp_customize,
    'footer_background_color',
    array(
      'label' => __('Footer Background Color', 'ploverwp'),
      'section' => 'section-colors',
    )
  )
);