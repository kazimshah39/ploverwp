<?php
/**
* The template for displaying the content.
*
* @package PloverWP
*/
?>
<article class="card mb-2">
  <?php if (has_post_thumbnail()) {
    ?>
    <div class="card-img-top">
      <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <!--/.card-img-top-->
    <?php
  } ?>
  <div class="card-body">

    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h2 card-title text-dark"><?php the_title(); ?></a>
    <p class="card-text">
      <small class="text-muted d-block mb-3">
        <?php do_action('ploverwp_single_entry_meta'); ?>
      </small>
      <?php the_excerpt(); ?>
    </p>

    <a href="<?php the_permalink(); ?>" title="<?php _e('Read more', 'ploverwp'); ?>" class="btn btn-success"><?php _e('Read more', 'ploverwp'); ?></a>
  </div>
</article>
<!--/#post-<?php the_ID(); ?>.blog-post-->