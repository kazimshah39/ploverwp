<?php

if (!function_exists('ploverwp_sticky_header_colors_el')) {


  function ploverwp_sticky_header_colors_el()
  {

    return [
      [
        'setting' => 'ploverwp_sticky_header_background_color',
        'style' => 'background-color',
        'selector' => '.mobile-sticky-header-enabled.ploverwp-is-mobile #header.header-scrolled, .desktop-sticky-header-enabled.ploverwp-is-desktop #header.header-scrolled, .all-devices-sticky-header-enabled #header.header-scrolled',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_menu_item_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .nav-menu li a',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticy_header_menu_item_hover_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .nav-menu li a:hover',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_menu_active_item_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .nav-menu .current-menu-item a',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_sub_menu_background_color',
        'style' => 'background-color',
        'selector' => '#header.header-scrolled .nav-menu .menu-item-has-children ul',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_mobile_menu_toggle_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .mobile-nav-toggle i',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_mobile_menu_background_color',
        'style' => 'background-color',
        'selector' => '#header.header-scrolled .mobile-nav',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_mob_menu_item_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .mobile-nav li a',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_mob_menu_item_hover_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .mobile-nav li a:hover',
        'css' => 'internal'
      ],
      [
        'setting' => 'ploverwp_sticky_header_mob_menu_active_item_color',
        'style' => 'color',
        'selector' => '#header.header-scrolled .mobile-nav .current-menu-item a',
        'css' => 'internal'
      ],
    ];
  }
}
