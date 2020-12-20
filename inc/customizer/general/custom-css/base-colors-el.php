<?php

if (! function_exists('ploverwp_base_colors_el')) {


  function ploverwp_base_colors_el() {

    return [
      [
        'setting' => 'ploverwp_text_color',
        'style' => 'color',
        'selector' => '#site-content, .entry-title a, .entry-title a:hover, #sidebar h5',
      ],
      [
        'setting' => 'ploverwp_link_color',
        'style' => 'color',
        'selector' => '#entry-content a:not(.read-more), #comments a, #sidebar a',
      ],
      [
        'setting' => 'ploverwp_link_hover_color',
        'style' => 'color',
        'selector' => '#entry-content a:hover:not(.read-more), #comments a:hover, #sidebar a:hover',
      ],
      [
        'setting' => 'ploverwp_heading_color',
        'style' => 'color',
        'selector' => '#content h1, #content h2, #content h3, #content h4, #content h5, #content h6'
      ],
      [
        'setting' => 'ploverwp_content_area_background_color',
        'style' => 'background-color',
        'selector' => '#site-content .card',
      ],
      [
        'setting' => 'ploverwp_base_background_color',
        'style' => 'background-color',
        'selector' => 'body',
      ]
    ];
  }
}