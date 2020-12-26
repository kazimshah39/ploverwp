<?php

/**

 * Customizer Control: dimensions
 *
 * @package PloverWP WordPress theme
 */

if (!defined('ABSPATH')) {
    exit;
}

class PloverWP_Control_Dimensions extends WP_Customize_Control
{

    public function render_content()
    {
?>
        <div class="ploverwp-dimensions">
            <input type="number">
            <input type="number">
            <input type="number">
            <input type="number">
            <span class="ploverwp-link-dimension-values">Inactive</span>
            <span>TOP</span>
            <span>RIGHT</span>
            <span>BOTTOM</span>
            <span>LEFT</span>
            <span></span>
        </div>
<?php
    }
}
