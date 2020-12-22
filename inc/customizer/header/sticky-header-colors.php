<?php

if (!function_exists('ploverwp_sticky_header_colors_config')) {
    function ploverwp_sticky_header_colors_config()
    {
        return [
            [
                'control' => 'divider',
                'id' => 'ploverwp-sticky-header-colors-divider',
                'label' => 'Sticky Header Colors',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_background_color',
                'default' => '',
                'transport' => 'postMessage',
                'label' => 'Background Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'divider',
                'id' => 'ploverwp-sticky-header-menu-bgcolor-divider',
                'label' => 'Menu',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_menu_item_color',
                'default' => '#000000',
                'transport' => 'postMessage',
                'label' => 'Items Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticy_header_menu_item_hover_color',
                'default' => '#47b2e4',
                'transport' => 'postMessage',
                'label' => 'Items Hover Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_menu_active_item_color',
                'default' => '#47b2e4',
                'transport' => 'postMessage',
                'label' => 'Active Item Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'divider',
                'id' => 'ploverwp-sticky-header-sub-menu-divider',
                'label' => 'Sub Menu',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_sub_menu_background_color',
                'default' => '#ffffff',
                'transport' => 'postMessage',
                'label' => 'Background Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'divider',
                'id' => 'ploverwp-sticky-header-mobile-menu-divider',
                'label' => 'Mobile Menu',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_mobile_menu_toggle_color',
                'default' => '#000000',
                'transport' => 'postMessage',
                'label' => 'Toggle Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_mobile_menu_background_color',
                'default' => '#ffffff',
                'transport' => 'postMessage',
                'label' => 'Background Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_mob_menu_item_color',
                'default' => '#000000',
                'transport' => 'postMessage',
                'label' => 'Items Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_mob_menu_item_hover_color',
                'default' => '#47b2e4',
                'transport' => 'postMessage',
                'label' => 'Items Hover Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
            [
                'control' => 'color',
                'id' => 'ploverwp_sticky_header_mob_menu_active_item_color',
                'default' => '#47b2e4',
                'transport' => 'postMessage',
                'label' => 'Active Item Color',
                'description' => '',
                'section' => 'section-sticky-header',
            ],
        ];
    }
}
