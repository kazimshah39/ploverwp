<?php

if (! function_exists('ploverwp_base_colors_el')) {


  function ploverwp_base_colors_el() {

    return [
      'content' => [
        'text' => [
          'setting' => 'ploverwp_text_color',
          'style' => 'color',
          'selector' => '#site-content, .entry-title a, .entry-title a:hover, #sidebar h5',
        ],
        'link' => [
          'setting' => 'ploverwp_link_color',
          'style' => 'color',
          'selector' => '#entry-content a:not(.read-more), #comments a, #sidebar a',
        ],
        'link-hover' => [
          'setting' => 'ploverwp_link_hover_color',
          'style' => 'color',
          'selector' => '#entry-content a:hover:not(.read-more), #comments a:hover, #sidebar a:hover',
        ],
        'heading' => [
          'setting' => 'ploverwp_heading_color',
          'style' => 'color',
          'selector' => '#content h1, #content h2, #content h3, #content h4, #content h5, #content h6'
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