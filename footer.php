<?php
/**
* The template for displaying the footer.
*
* @package PloverWP WordPress theme
*/
?>

</div>
<!--/.container .site-->

<footer id="site-footer" role="contentinfo">

<div class="section-inner">

<div class="footer-credits">

<p class="footer-copyright">
&copy;
<?php
echo date_i18n(
/* translators: Copyright date format, see https://www.php.net/date */
_x('Y', 'copyright date format', 'ploverwp')
);
?>
<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
</p>
<!-- .footer-copyright -->

<p>
<a href="<?php echo esc_url(__('https://www.webplover.com/', 'ploverwp')); ?>">
<?php _e('Powered by WebPlover', 'ploverwp'); ?>
</a>
</p>


</div>
<!-- .footer-credits -->

</div>
<!-- .section-inner -->

</footer>
<!-- #site-footer -->

<span class="back-to-top"><i></i></span>
<!-- <div id="preloader"></div> -->

<?php wp_footer(); ?>

</body>
</html>