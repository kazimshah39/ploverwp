<?php

if (! function_exists('ploverwp_header_colors_el')) {


  function ploverwp_header_colors_el() {

    return [
      'header' => [
        'background' => [
          'setting' => 'ploverwp_header_background_color',
          'style' => 'background-color',
          'selector' => '#header',
        ],
        'site-title' => [
          'setting' => 'ploverwp_header_site_title',
          'style' => 'color',
          'selector' => '.site-title a',
        ],
      ]
    ];
  }
}