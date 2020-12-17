<?php

function ploverwp_widgets()
{
  register_sidebar([
    'name' => __('Sidebar', 'ploverwp'),
    'id' => 'ploverwp_sidebar',
    'description' => __('Sidebar for PloverWP theme', 'ploverwp'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-title"><h5>',
    'after_title' => '</h5></div>'
  ]);
}
