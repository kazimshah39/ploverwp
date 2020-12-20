<?php

if (!function_exists('ploverwp_footer_sections')) {
    function ploverwp_footer_sections()
    {
        return [
            [
                'id' => 'section-footer-bar',
                'title' => 'Footer Bar',
                'priority' => 1,
                'panel' => 'panel-footer',
            ],
        ];
    }
}
