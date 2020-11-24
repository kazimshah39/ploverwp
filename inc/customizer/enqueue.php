<?php
function ploverwp__customize_preview_init() {
  wp_enqueue_script('ploverwp_customizer', get_theme_file_uri('/assets/js/customizer.js'), ['jquery', 'customize-preview'], false, true);
  wp_localize_script('ploverwp_customizer', 'ploverwpPreviewEls', ploverwp_get_elements());
}