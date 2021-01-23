<div class="header-inner container d-flex align-items-center justify-content-between">

  <div class="ploverwp-site-identity">
    <h1 class="site-title m-0"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
    <p class="site-description m-0" itemprop="description">
      <?php bloginfo('description'); ?>
    </p>
  </div>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  <button type="button" class="mobile-nav-toggle d-md-none"><i class="fas fa-bars"></i></button>
  <div class="mobile-nav-overly"></div>
  <?php
  if (has_nav_menu('primary')) {
    wp_nav_menu([
      'theme_location' => 'primary',
      'depth' => 0,
      'container' => 'nav',
      'container_id' => 'nav-menu',
      'container_class' => 'nav-menu d-none d-md-block',
    ]);
  } else {
    wp_page_menu([
      'show_home' => true,
      'container' => 'nav',
      'menu_id' => 'nav-menu',
      'menu_class' => 'nav-menu d-none d-md-block',
    ]);
  } ?>

</div>