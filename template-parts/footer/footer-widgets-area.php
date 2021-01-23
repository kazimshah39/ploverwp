<?php
$footer_layout = get_theme_mod('ploverwp_footer_widgets_layout', '1,1,1,1,1');
$footer_layout = preg_replace('/\s+/', '', $footer_layout);
$columns = explode(',', $footer_layout);

if ($footer_layout != '0') {

  ?>
  <div class="container-lg footer-widgets-area">
    <div class="row">
      <?php
      foreach ($columns as $i => $column) {
        if ($footer_layout == '1,1,1,1,1') {
          if (is_active_sidebar('ploverwp_footer_widget_area_' . ($i + 1))) {
            echo '<div class="col-md">';
            dynamic_sidebar('ploverwp_footer_widget_area_' . ($i + 1));
            echo '</div>';
          }
        } else {
          if (is_active_sidebar('ploverwp_footer_widget_area_' . ($i + 1))) {
            echo '<div class="col-md-'. $column .'">';
            dynamic_sidebar('ploverwp_footer_widget_area_' . ($i + 1));
            echo '</div>';
          }
        }
      }

      ?>
    </div>
  </div>
  <?php
} ?>