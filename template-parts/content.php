<?php
/**
* The template for displaying the content.
*
* @package PloverWP
*/
?>
<article>
  <div class="card mb-2">
    <div class="card-body">
      <header id="entry-header">
        <?php if (has_post_thumbnail()) {
          ?>
          <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'mb-4']); ?></a>
          <?php
        } ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="card-title entry-title-link"><?php the_title(); ?></a></h2>
        <p class="card-text">
          <small class="entry-meta text-muted d-block mb-3">
            <?php do_action('ploverwp_single_entry_meta'); ?>
          </small>
        </header>
        <div id="entry-content">
          <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>" title="<?php _e('Read more', 'ploverwp'); ?>" class="btn btn-success read-more"><?php _e('Read more', 'ploverwp'); ?></a>
      </div>
    </div>
  </div>
</article>