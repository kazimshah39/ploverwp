<?php

/**

* Customizer Control: radio image
*
* @package PloverWP WordPress theme
*/

if (! defined('ABSPATH')) {
  exit;
}

if (class_exists('WP_Customize_Control')) :
class PloverWP_Radio_Image_Control extends WP_Customize_Control
{


  public $type = 'radio-image';


  public function render_content() {
    ?>

    <?php foreach ($this->choices as $key => $value) {
      ?>
      <input class="ploverwp-radio-image" id="<?php echo esc_attr($key); ?>" type="radio" value="<?php echo esc_attr($key); ?>"
      name="<?php echo esc_attr($this->id); ?>" <?php $this->link(); ?> />
      <label for="<?php echo esc_attr($key); ?>" title="<?php echo esc_attr($value['title']); ?>"><?php echo $value['icon']; ?></label>
      <?php
    }
  }



}
endif;