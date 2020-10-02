<?php
/**
* The template for displaying the single content.
*
* @package PloverWP
*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
  <?php if (has_post_thumbnail()) {
    ?>
    <div class="img-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <!--/.img-thumbnail-->
    <?php
  } ?>

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