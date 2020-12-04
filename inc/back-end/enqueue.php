<?php


function ploverwp_back_end_scripts() {

  wp_enqueue_style('admin-css', get_theme_file_uri('/assets/css/admin/admin.css'), [], microtime());

}