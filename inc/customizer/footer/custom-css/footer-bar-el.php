<?php

if (!function_exists('ploverwp_footer_bar_el')) {


  function ploverwp_footer_bar_el() {

    return [
      [
        'setting' => 'ploverwp_footerbar_background_color',
        'style' => 'background-color',
        'selector' => '.footer-copyright-container',
      ]
    ];
  }
}