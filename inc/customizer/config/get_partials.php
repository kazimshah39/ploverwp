<?php

if (!function_exists('ploverwp_get_partials')) {


  function ploverwp_get_partials() {

    return [
      [
        'id' => 'blogname',
        'selector' => '.site-title a',
        'container_inclusive' => false,
        'render_callback' => function () {
          bloginfo('title');
        }],
      [
        'id' => 'blogdescription',
        'selector' => '.site-description',
        'container_inclusive' => false,
        'render_callback' => function () {
          bloginfo('description');
        }],
      [
        'id' => 'ploverwp_footerbar_layout',
        'selector' => '.footer-copyright-container',
        'container_inclusive' => true,
        'render_callback' => function () {
          get_template_part('template-parts/footer/footer-bar');
        }],
      [
        'id' => 'ploverwp_copyright_first_section',
        'selector' => '.section-1',
        'container_inclusive' => false,
        'render_callback' => function () {
          get_template_part('template-parts/footer/copyright-section-1');
        }],
      [
        'id' => 'ploverwp_copyright_second_section',
        'selector' => '.section-2',
        'container_inclusive' => false,
        'render_callback' => function () {
          get_template_part('template-parts/footer/copyright-section-2');
        }],
    ];
  }
}