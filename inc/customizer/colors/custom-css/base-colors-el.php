<?php

if (! function_exists('ploverwp_base_colors_el')) {


  function ploverwp_base_colors_el() {

    return [
      'content' => [
        'text' => [
          'setting' => 'ploverwp_text_color',
          'style' => 'color',
          'selector' => '#site-content, .entry-title a, .entry-title a:hover',
        ],
        'link' => [
          'setting' => 'ploverwp_link_color',
          'style' => 'color',
          'selector' => '#site-content a',
        ],
        'link-hover' => [
          'setting' => 'ploverwp_link_hover_color',
          'style' => 'color',
          'selector' => '#site-content a:hover',
        ],
        'heading' => [
          'setting' => 'ploverwp_heading_color',
          'style' => 'color',
          'selector' => '#site-content h1,#site-content h2,#site-content h3,#site-content h4,#site-content h5,#site-content h6',
        ],
        'background' => [
          'setting' => 'ploverwp_background_color',
          'style' => 'background-color',
          'selector' => '#site-content',
        ]
      ]
    ];
  }
}