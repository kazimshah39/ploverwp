<?php

if (! class_exists('PloverWP_Entry_Meta_Output')) {

  class PloverWP_Entry_Meta_Output {
    function __construct() {
      add_action('ploverwp_single_entry_meta', array($this, 'single_entry_meta'));
    }

    function single_entry_meta() {

      global $post;

      $categories_list = get_the_category_list(esc_html__(', ', 'ploverwp'));
      $number_comments = get_comments_number();


      $output = '<ul class="meta"><li><i class="mr-1 far fa-user"></i>' . esc_html(get_the_author()) . '</li>
      <li><i class="mr-1 far fa-clock"></i><time datetime="' . sprintf('%s-%s-%s', get_the_date('Y'), get_the_date('m'), get_the_date('d')) . '">' . get_the_date() . '</time></li>
      <li><i class="mr-1 far fa-folder"></i>' . $categories_list . '</li>';

      if (comments_open()) {
        if (0 == $number_comments) {
          $output .= '<li><i class="mr-1 far fa-comment"></i>' . __('No comments', 'ploverwp') . '</li>';
        } else {
          if ($number_comments > 1) {
            $output .= '<li><i class="mr-1 far fa-comment"></i><a class="meta-comments" href=". get_comments_link() ." title=". $number_comments . ' . __('comments', 'ploverwp') . '">. $number_comments . ' . __('comments', 'ploverwp') . '</a></li>';
          } else {
            $output .= '<li><i class="mr-1 far fa-comment"></i><a class="meta-comments" href=". get_comments_link() ." title="' . __('1 comment', 'ploverwp') . '">' . __('1 comment', 'ploverwp') . '</a></li>';
          }
        }
      } else {
        $output .= '<li><i class="mr-1 far fa-comment"></i>' . __('Comments are off for this post', 'ploverwp') . '</li>';
      }

      $output .= '</ul>';
      $output .= '<br><br><ul class="meta">
  <li class="meta-author" itemprop="name"><i class="far fa-user" aria-hidden="true"></i><a href="http://jjj-author" title="Posts by kazimshah39" rel="author" itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person">kazimshah39</a></li>
  <li class="meta-date" itemprop="datePublished"><i class="far fa-clock" aria-hidden="true"></i>September 27</li>
  <li class="meta-cat"><i class="far fa-folder" aria-hidden="true"></i><a href="http://localhost:8000/wordpress/category/know-if-you-need-anything-else/" rel="category tag">Know if yoe</a> <span class="owp-sep">/</span> <a href="http://localhost:8000/wordpress/category/uncategorized/" rel="category tag">Uncategorized</a></li>
  <li class="meta-comments"><i class="far fa-comment" aria-hidden="true"></i><a href="http://localhost:8000/wordpress/hello-world/#comments" class="comments-link">1 Comment</a></li><ul class="meta clr">
</ul>';

      echo $output;
    }

  }

  new PloverWP_Entry_Meta_Output();
}