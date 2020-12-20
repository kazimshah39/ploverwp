<?php

if (!function_exists('ploverwp_footer_bar_config')) {
    function ploverwp_footer_bar_config()
    {
        return [
            [
                'control' => 'color',
                'id' => 'ploverwp_footer_background_color',
                'default' => '#ffffff',
                'transport' => 'postMessage',
                'label' => 'Footer Background Color',
                'description' => '',
                'section' => 'section-footer-bar',
            ]
        ];
    }
}
