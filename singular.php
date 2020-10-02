<?php
/**
*    The template for displaying the single.
*
* @package PloverWP
*/

?>

<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Better Solutions For Your Business</h1>
        <h2>We are team of talanted designers making websites with Bootstrap</h2>
        <div class="d-lg-flex">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section>
<!-- End Hero -->


<div class="container">
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
          get_template_part('template-parts/content', 'single');
          endwhile;
          endif;
          ?>
        </section>
        <!--/#blog-->
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
    <!--/.row-->
  </div>
  <!--/.container-->
  <?php get_footer(); ?>