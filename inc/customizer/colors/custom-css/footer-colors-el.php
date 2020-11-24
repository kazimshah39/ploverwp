<?php

if (! function_exists('ploverwp_footer_colors_el')) {


  function ploverwp_footer_colors_el() {

    return [
      'footer' => [
        'background' => [
          'setting' => 'ploverwp_footer_background_color',
          'style' => 'background-color',
          'selector' => '#footer',
        ]
      ]
    ];
  }
}