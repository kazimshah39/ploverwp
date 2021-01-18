<?php

/**

* Customizer Control: radio-image
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit;
}

class PloverWP_Control_Radio_Image extends WP_Customize_Control {

  public function render_content() {

    foreach ($this->choices as $key => $value) {
      ?>
      <input type="radio" name="<?php echo esc_attr($this->id); ?>" class="ploverwp-radio-image" id="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($value['value']); ?>" <?php $this->link(); ?>>
      <label for="<?php echo esc_attr($key); ?>"><?php echo $value['icon']; ?></label>
      <?php
    }
  }
}