<?php
/**
* The template for displaying the single content.
*
* @package PloverWP
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
  <div class="card mb-3">
    <div class="card-body px-3 pb-0">
      <header id="entry-header">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('full', [
            'class' => 'mb-4']);
        } ?>
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text">
          <small class="entry-meta text-muted">
            <?php do_action('ploverwp_single_entry_meta'); ?>
          </small>
        </p>
      </header>
      <div id="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <!--/.card-->

  <nav>
    <?php
    wp_link_pages([
      'before' => '<div class="page-link">' . __('Pages:', 'ploverwp'),
      'after' => '</div><!--/.page-link-->',
    ]);
    ?>
  </nav>

  <?php
  if (comments_open() || get_comments_number()) : ?>
  <div id="comments">
    <?php comments_template(); ?>
  </div>
  <?php endif; ?>
</article>