<?php

/**

* Customizer Control: divider
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit;
}

class PloverWP_Control_Divider extends WP_Customize_Control {

  public function render_content() {
    ?>
    <div class="customizer-divider">
      <?php echo esc_html($this->label); ?>
    </div>
    <?php
  }

}