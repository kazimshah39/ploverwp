<?php

if (! function_exists('ploverwp_header_colors_config')) {
  function ploverwp_header_colors_config() {
    return [
      'header' => [
        'background' => [
          'control' => 'color',
          'id' => 'ploverwp_header_background_color',
          'default' => '#ffffff',
          'transport' => 'postMessage',
          'label' => 'Header Background Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'site-title' => [
          'control' => 'color',
          'id' => 'ploverwp_header_site_title_color',
          'default' => '#000000',
          'transport' => 'postMessage',
          'label' => 'Site Title Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'tagline' => [
          'control' => 'color',
          'id' => 'ploverwp_header_tagline_color',
          'default' => '#000000',
          'transport' => 'postMessage',
          'label' => 'Tagline Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'menu-items' => [
          'control' => 'color',
          'id' => 'ploverwp_header_menu_item_color',
          'default' => '#000000',
          'transport' => 'postMessage',
          'label' => '<div class="customizer-divider">Menu</div>Items Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'menu-items-hover' => [
          'control' => 'color',
          'id' => 'ploverwp_header_menu_item_hover_color',
          'default' => '#47b2e4',
          'transport' => 'refresh',
          'label' => 'Items Hover Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'menu-active-item' => [
          'control' => 'color',
          'id' => 'ploverwp_header_menu_active_item_color',
          'default' => '#47b2e4',
          'transport' => 'postMessage',
          'label' => 'Active Item Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'sub-menu-background' => [
          'control' => 'color',
          'id' => 'ploverwp_header_sub_menu_background_color',
          'default' => '#ffffff',
          'transport' => 'postMessage',
          'label' => '<div class="customizer-divider">Sub Menu</div>Background Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'mobile-menu-toggle' => [
          'control' => 'color',
          'id' => 'ploverwp_header_mobile_menu_toggle_color',
          'default' => '#000000',
          'transport' => 'postMessage',
          'label' => '<div class="customizer-divider">Mobile Menu</div>Toggle Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'mobile-menu-background' => [
          'control' => 'color',
          'id' => 'ploverwp_header_mobile_menu_background_color',
          'default' => '#ffffff',
          'transport' => 'postMessage',
          'label' => 'Background Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'mob-menu-items' => [
          'control' => 'color',
          'id' => 'ploverwp_header_mob_menu_item_color',
          'default' => '#000000',
          'transport' => 'postMessage',
          'label' => 'Items Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'mob-menu-items-hover' => [
          'control' => 'color',
          'id' => 'ploverwp_header_mob_menu_item_hover_color',
          'default' => '#47b2e4',
          'transport' => 'refresh',
          'label' => 'Items Hover Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
        'mob-menu-active-item' => [
          'control' => 'color',
          'id' => 'ploverwp_header_mob_menu_active_item_color',
          'default' => '#47b2e4',
          'transport' => 'postMessage',
          'label' => 'Active Item Color',
          'description' => '',
          'section' => 'section-header-colors',
        ],
      ]
    ];
  }
}