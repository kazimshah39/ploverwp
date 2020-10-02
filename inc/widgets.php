<?php

function ploverwp_widgets() {
  register_sidebar(array(
    'name' => __('Sidebar', 'ploverwp'),
    'id' => 'ploverwp_sidebar',
    'description' => __('Sidebar for PloverWP theme', 'ploverwp'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ));
}