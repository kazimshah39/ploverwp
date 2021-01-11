<?php

/**

* Customizer Control: popover
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit;
}

class PloverWP_Control_Popover extends WP_Customize_Control {

  public $content;

  public function render_content() {
    ?>
    <div class="ploverwp-popover-toggle" id="<?php echo esc_attr($this->id); ?>">
      <span class="dashicons dashicons-editor-help"></span>
    </div>

    <div class="ploverwp-popover-content" style="display:none">
      <?php echo esc_textarea($this->content); ?>
      <div class="ploverwp-popover-arrow-down"></div>
    </div>
    <?php
  }
}