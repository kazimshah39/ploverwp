<div class="footer-copyright-container">
  <?php
  if (get_theme_mod('ploverwp_footerbar_layout', '2') != 0) {
    ?>
    <div class="container-lg">
      <div class="row footer-copyright">
        <?php

        if (get_theme_mod('ploverwp_footerbar_layout') == '2') {
          ?>
          <div class="col-md-6 section-1">
            <?php
            get_template_part('template-parts/footer/copyright-section-1');
            ?>
          </div>
          <div class="col-md-6 section-2">
            <?php
            get_template_part('template-parts/footer/copyright-section-2');
            ?>
          </div>
          <?php
        } else {
          ?>
          <div class="col-12 section-1">
            <?php
            get_template_part('template-parts/footer/copyright-section-1');
            ?>
          </div>
          <div class="col-12 section-2">
            <?php
            get_template_part('template-parts/footer/copyright-section-2');
            ?>
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