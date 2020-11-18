<?php

if (! function_exists('ploverwp_base_colors_el')) {


  function ploverwp_base_colors_el() {

    return array(
      'content' => array(
        'text' => array(
          'setting' => 'ploverwp_text_color',
          'style' => 'color',
          'selector' => '#site-content, .entry-title a, .entry-title a:hover',
        ),
        'link' => array(
          'setting' => 'ploverwp_link_color',
          'style' => 'color',
          'selector' => '#site-content a',
        ),
        'link-hover' => array(
          'setting' => 'ploverwp_link_hover_color',
          'style' => 'color',
          'selector' => 'a:hover',
        ),
        'heading' => array(
          'setting' => 'ploverwp_heading_color',
          'style' => 'color',
          'selector' => 'h1,h2,h3,h4,h5,h6',
        ),
        'background' => array(
          'setting' => 'ploverwp_background_color',
          'style' => 'background-color',
          'selector' => '#site-content',
        )
      )
    );
  }
}