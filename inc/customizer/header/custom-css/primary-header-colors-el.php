<?php

if (!function_exists('ploverwp_primary_header_colors_el')) {


    function ploverwp_primary_header_colors_el()
    {

        return [
            [
                'setting' => 'ploverwp_header_background_color',
                'style' => 'background-color',
                'selector' => '#header',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_header_site_title_color',
                'style' => 'color',
                'selector' => '.site-title a',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_header_tagline_color',
                'style' => 'color',
                'selector' => '.site-description',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_menu_item_color',
                'style' => 'color',
                'selector' => '.nav-menu li a',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_menu_item_hover_color',
                'style' => 'color',
                'selector' => '.nav-menu li a:hover',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_menu_active_item_color',
                'style' => 'color',
                'selector' => '.nav-menu .current-menu-item a',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_sub_menu_background_color',
                'style' => 'background-color',
                'selector' => '.nav-menu .menu-item-has-children ul',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_mobile_menu_toggle_color',
                'style' => 'color',
                'selector' => '.mobile-nav-toggle i',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_mobile_menu_background_color',
                'style' => 'background-color',
                'selector' => '.mobile-nav',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_mob_menu_item_color',
                'style' => 'color',
                'selector' => '.mobile-nav li a',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_mob_menu_item_hover_color',
                'style' => 'color',
                'selector' => '.mobile-nav li a:hover',
                'css' => 'internal'
            ],
            [
                'setting' => 'ploverwp_primary_header_mob_menu_active_item_color',
                'style' => 'color',
                'selector' => '.mobile-nav .current-menu-item a',
                'css' => 'internal'
            ],
        ];
    }
}
