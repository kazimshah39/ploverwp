<?php

/**
* The template for displaying the footer.
*
* @package PloverWP WordPress theme
*/
?>

</div>
<!--/.container-lg #site-content-->


<!-- Footer -->
<footer id="footer">

<?php

$footer_layout = get_theme_mod('ploverwp_footer_widgets_layout');
$footer_layout = preg_replace('/\s+/', '', $footer_layout);
$columns = explode(',', $footer_layout);
if ($footer_layout != '0') {
?>
<!-- Footer Container -->
<div class="container-lg footer-widgets-area">

<!-- Grid row -->
<div class="row">

<?php
foreach ($columns as $i => $column) {
if ($column == '1,1,1,1,1') {
if (is_active_sidebar('ploverwp_footer_widget_area_5')) {
echo '<div class="col-md">';
dynamic_sidebar('ploverwp_footer_widget_area_5');
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
<!-- Grid row -->

</div>
<!-- Footer Container -->

<?php
} ?>

<!-- Copyright -->
<div class="footer-copyright text-center">

&copy;
<?php
echo date_i18n(
/* translators: Copyright date format, see https://www.php.net/date */
_x('Y ', 'copyright date format', 'ploverwp')
);
?>
<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

<?php _e('Powered by ', 'ploverwp'); ?>
<a href="<?php echo esc_url(__('https://www.webplover.com/', 'ploverwp')); ?>">
<?php _e('WebPlover', 'ploverwp'); ?>
</a>

</div>
<!-- Copyright -->

</footer>
<!-- Footer -->



<span class="back-to-top"><i class="fas fa-arrow-up"></i></span>
<!--<div id="preloader"></div>-->

<?php wp_footer(); ?>

</body>

</html>