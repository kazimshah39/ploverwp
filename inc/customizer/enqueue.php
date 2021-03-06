<?php
function ploverwp__customize_preview_init() {
  wp_enqueue_style('ploverwp-customizer-preview-css', get_theme_file_uri('/assets/css/admin/customizer-preview.css'), [], microtime());
  wp_enqueue_script('ploverwp_customizer', get_theme_file_uri('/assets/js/admin/customizer-preview.js'), ['jquery', 'customize-preview'], false, true);
  wp_localize_script('ploverwp_customizer', 'ploverwpPreviewEls', ploverwp_get_elements());
}