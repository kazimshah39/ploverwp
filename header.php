<?php
/**
* The Header for our theme.
*
* @package PloverWP WordPress theme
*/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php
  wp_body_open();
  ?>


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <div class="mr-auto">
        <h1 class="site-title m-0"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
        <p class="site-description m-0" itemprop="description">
          <?php bloginfo('description'); ?>
        </p>
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'depth' => 0, // 1 = no dropdowns, 2 = with dropdowns.
        'container' => 'nav',
        'container_class' => 'nav-menu d-none d-md-block',
      ]);
      ?>

    </div>
  </header>
  <!-- End Header -->
  <div id="site-content" class="container-fluid position-relative" style="padding:6rem 1.5rem 1.5rem 1.5rem;">