<?php
/**
* The template for displaying the single content.
*
* @package PloverWP
*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
  <div class="card mb-3">
    <?php if (has_post_thumbnail()) {
      ?>

      <?php the_post_thumbnail('full', array(
        'class' => 'card-img-top')); ?>

      <?php
    } ?>
    <div class="card-body px-3 pb-0">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text">
        <small class="text-muted">
          <?php do_action('ploverwp_single_entry_meta'); ?>
        </small>
      </p>
    </div>
  </div>
  <div class="my-class">
    <?php
    the_content();

    wp_link_pages(array(
      'before' => '<div class="page-link">' . __('Pages:', 'ploverwp'),
      'after' => '</div><!--/.page-link-->',
    ));
    ?>
  </div>
  <!--/.my-class-->

  <?php
  if (comments_open() || get_comments_number()) :
  comments_template();
  endif;
  ?>
</article>