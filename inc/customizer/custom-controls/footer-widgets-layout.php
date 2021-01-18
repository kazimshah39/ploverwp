<?php

/**

* Customizer Control: footer-widgets-layout
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit;
}

if (class_exists('WP_Customize_Control')) :
class PloverWP_Footer_Widgets_Layout_Control extends WP_Customize_Control
{


  public $type = 'footer-widgets-layout';


  public function render_content() {

    foreach ($this->choices as $key => $value) {
      ?>
      <input type="radio" name="<?php echo esc_attr($this->id); ?>" class="ploverwp-radio-image ploverwp-footer-widgets-layout-image" id="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($value['value']); ?>" <?php $this->link(); ?>>
      <label for="<?php echo esc_attr($key); ?>"><?php echo $value['icon']; ?></label>
      <?php
    } ?>
    <br><br>
    <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="" id="ploverwp-custom-footer-layout-button" <?php $this->link(); ?>>
    <label for="ploverwp-custom-footer-layout-button">Custom</label>
    <br><br>
    <input type="text" placeholder="1,2,3" id="ploverwp-custom-footer-layout" <?php $this->link(); ?>>

    <?php
  }



}
endif;