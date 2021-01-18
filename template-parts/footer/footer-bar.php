<div class="footer-copyright-container">
  <?php
  if (get_theme_mod('ploverwp_footerbar_layout') != 0) {
    ?>
    <div class="container-lg">
      <div class="row footer-copyright">
        <?php if (get_theme_mod('ploverwp_footerbar_layout') == '2') {
          ?>
          <div class="col-md-6">
            <?php get_template_part('template-parts/footer/footer-copyright-content'); ?>
          </div>
          <div class="col-md-6">
            ddd
          </div>
          <?php
        } else {
          ?>
          <div class="col-12">
            <?php get_template_part('template-parts/footer/footer-copyright-content'); ?>
          </div>
          <div class="col-12">
            fff
          </div>
          <?php
        }
        ?>
      </div>
    </div>
    <?php
  }
  ?>
</div>