<?php

if (! function_exists('ploverwp_header_colors_el')) {


  function ploverwp_header_colors_el() {

    return array(
      'header' => array(
        'background' => array(
          'setting' => 'ploverwp_header_background_color',
          'style' => 'background-color',
          'selector' => '#header',
        )
      )
    );
  }
}