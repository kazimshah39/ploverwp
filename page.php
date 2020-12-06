<?php
/**
* The template for displaying the page.
*
* @package PloverWP
*/

?>

<?php get_header(); ?>




<div class="row">
  <?php if (is_active_sidebar('ploverwp_sidebar')) {
    ?>
    <div class="col-sm-8">
      <?php
    } else {
      ?>
      <div class="col-sm-8 col-sm-offset-2">
        <?php
      } ?>

      <section id="content">
        <?php
        if (have_posts()) :
        while (have_posts()) :
        the_post();
        the_title('<h3 class="mb-4">', '</h3>');
        the_content();
        endwhile;
        endif;
        ?>
      </section>
      <!--/#page-content-->
    </div>
    <!--/.col-sm-7-->
    <?php if (is_active_sidebar('ploverwp_sidebar')) {
      ?>
      <div class="col-sm-4">
        <div id="sidebar">
          <?php dynamic_sidebar('ploverwp_sidebar'); ?>
        </div>
      </div>
      <?php
    } ?>
  </div>
</div>
<!--/.row-->

<?php get_footer(); ?>