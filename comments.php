<?php
if (post_password_required()) {
  return;
}


if (have_comments()) {
  ?>



  <!-- -->
  <div class="comments-area">

    <div class="comments-count-wrapper">
      <h3 class="comments-title">
        <?php
        $comments_title = apply_filters(
          'ploverwp_comment_form_title',
          sprintf(
            esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'ploverwp')),
            number_format_i18n(get_comments_number()),
            get_the_title()
          )
        );

        echo esc_html($comments_title);
        ?>
      </h3>
    </div>


    <?php wp_list_comments(['avatar_size' => 50]); ?>
  </div>
  <?php
}


comment_form([
  'comment_field' => '
    <textarea class="form-control" name="comment" rows="5" placeholder="' .  __('Type here...', 'ploverwp') . '"></textarea>
    ',
  'fields' => [
    'author' => '
        <input type="text" name="author" class="form-control mt-3" placeholder="' .  __('Name*', 'ploverwp') . '">
        ',
    'email' => '
    <input type="email" name="email" class="form-control mt-3" placeholder="' .  __('Email*', 'ploverwp') . '">
    ',
    'url' => '
    <input type="url" name="url" class="form-control mt-3" placeholder="Website">
    </br>'
  ],
  'class_submit' => 'btn btn-outline-success',
  'title_reply' => __('Leave a Comment', 'ploverwp')

]);
?>