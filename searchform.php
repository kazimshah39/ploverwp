<?php

/**
 * Template for displaying search forms in PloverWP
 *
 * @package PloverWP
 */

?>

<?php $unique_id = esc_attr(ploverwp_unique_id('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="<?php echo $unique_id ?>">
    <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'ploverwp'); ?></span>
  </label>
  <input type="search" id="<?php echo $unique_id; ?>" class="search-field form-control" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'ploverwp'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit" class="search-submit btn btn-secondary"><i class="fas fa-search"></i><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'ploverwp'); ?></span></button>
</form>