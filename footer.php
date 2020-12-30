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
$widget_layout = get_theme_mod('ploverwp_footer_widgets_layout');

if ($widget_layout != 'footer-widgets-layout-disable') {
?>
<!-- Footer Container -->
<div class="container-lg footer-widgets-area">

<!-- Grid row -->
<div class="row">

<?php

if ($widget_layout == 'footer-widgets-layout-1') {
echo '<div class="col-md">';
dynamic_sidebar('ploverwp_footer_widget_area_1');
echo '</div>';
}

for ($i = 1; $i <= 2; $i++) {
if ($widget_layout == 'footer-widgets-layout-2') {
echo '<div class="col-md">';
dynamic_sidebar('ploverwp_footer_widget_area_' . $i);
echo '</div>';
}
}

for ($i = 1; $i <= 3; $i++) {
if ($widget_layout == 'footer-widgets-layout-3') {
echo '<div class="col-md">';
dynamic_sidebar('ploverwp_footer_widget_area_' . $i);
echo '</div>';
}
}

for ($i = 1; $i <= 4; $i++) {
if ($widget_layout == 'footer-widgets-layout-4') {
echo '<div class="col-md">';
dynamic_sidebar('ploverwp_footer_widget_area_' . $i);
echo '</div>';
}
}

for ($i = 1; $i <= 5; $i++) {
if ($widget_layout == 'footer-widgets-layout-5') {
echo '<div class="col-md">';
dynamic_sidebar('ploverwp_footer_widget_area_' . $i);
echo '</div>';
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