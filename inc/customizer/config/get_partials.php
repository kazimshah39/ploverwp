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
    ];
  }
}