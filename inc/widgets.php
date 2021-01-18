<?php

function ploverwp_widgets() {
  // Main Sidebar
  register_sidebar([
    'name' => esc_html__('Sidebar', 'ploverwp'),
    'id' => 'ploverwp_sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>'
  ]);

  $footer_layout = get_theme_mod('ploverwp_footer_widgets_layout', '1,1,1,1,1');
  $columns = explode(',', $footer_layout);

  if ($footer_layout != '0') {

    foreach ($columns as $i => $column) {
      register_sidebar([
        'name' => sprintf(esc_html__('Footer Widget Area %s', 'ploverwp'), $i + 1),
        'id' => 'ploverwp_footer_widget_area_' . ($i + 1),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="widget-title"><h5>',
        'after_title' => '</h5></div>'
      ]);
    }
  }

}