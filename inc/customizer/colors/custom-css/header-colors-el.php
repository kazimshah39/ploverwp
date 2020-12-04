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
          'setting' => 'ploverwp_header_site_title_color',
          'style' => 'color',
          'selector' => '.site-title a',
        ],
        'tagline' => [
          'setting' => 'ploverwp_header_tagline_color',
          'style' => 'color',
          'selector' => '.site-description',
        ],
        'menu-items' => [
          'setting' => 'ploverwp_header_menu_item_color',
          'style' => 'color',
          'selector' => '.nav-menu li a',
        ],
        'menu-items-hover' => [
          'setting' => 'ploverwp_header_menu_item_hover_color',
          'style' => 'color',
          'selector' => '.nav-menu li a:hover',
        ],
        'menu-active-item' => [
          'setting' => 'ploverwp_header_menu_active_item_color',
          'style' => 'color',
          'selector' => '.nav-menu .current-menu-item a',
        ],
        'sub-menu-background' => [
          'setting' => 'ploverwp_header_sub_menu_background_color',
          'style' => 'background-color',
          'selector' => '.nav-menu .menu-item-has-children ul',
        ],
        'mobile-menu-toggle' => [
          'setting' => 'ploverwp_header_mobile_menu_toggle_color',
          'style' => 'color',
          'selector' => '.mobile-nav-toggle i',
        ],
        'mobile-menu-background' => [
          'setting' => 'ploverwp_header_mobile_menu_background_color',
          'style' => 'background-color',
          'selector' => '.mobile-nav',
        ],
        'mob-menu-items' => [
          'setting' => 'ploverwp_header_mob_menu_item_color',
          'style' => 'color',
          'selector' => '.mobile-nav li a',
        ],
        'mob-menu-items-hover' => [
          'setting' => 'ploverwp_header_mob_menu_item_hover_color',
          'style' => 'color',
          'selector' => '.mobile-nav li a:hover',
        ],
        'mob-menu-active-item' => [
          'setting' => 'ploverwp_header_mob_menu_active_item_color',
          'style' => 'color',
          'selector' => '.mobile-nav .current-menu-item a',
        ],
      ]
    ];
  }
}