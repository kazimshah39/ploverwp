<?php

/**
 *  The template for displaying the sidebar.
 *
 * @package PloverWP
 */
?>
<div class="col-sm-4">
  <div id="sidebar">
    <?php
    if (is_active_sidebar('ploverwp_sidebar')) {
      dynamic_sidebar('ploverwp_sidebar');
    }
    ?>
  </div>
  <!--/#sidebar-->
</div>
<!--/.col-sm-4-->