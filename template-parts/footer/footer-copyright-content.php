&copy;

<?php

echo date_i18n(_x('Y ', 'copyright date format', 'ploverwp')); ?>

<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

<?php _e('Powered by ', 'ploverwp'); ?>

<a href="<?php echo esc_url(__('https://www.webplover.com/', 'ploverwp')); ?>">
  <?php _e('WebPlover', 'ploverwp'); ?>
</a>