<?php

if (! function_exists('ploverwp_footer_colors_el')) {


  function ploverwp_footer_colors_el() {

    return array(
      'footer' => array(
        'background' => array(
          'setting' => 'ploverwp_footer_background_color',
          'style' => 'background-color',
          'selector' => '#footer',
        )
      )
    );
  }
}