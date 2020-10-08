<?php
/**
* The template for displaying the index.
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

      <section id="blog">
        <?php
        if (have_posts()) :
        while (have_posts()) :
        the_post();
        get_template_part('template-parts/content');
        endwhile;
        endif;
        ?>
      </section>
      <!--/#blog-->
    </div>
    <!--/.col-sm-8-->

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
  <!--/.row-->
  <?php get_footer(); ?>