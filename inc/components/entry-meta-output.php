<?php

if (! class_exists('PloverWP_Entry_Meta_Output')) {

  class PloverWP_Entry_Meta_Output {
    function __construct() {
      add_action('ploverwp_single_entry_meta', array($this, 'single_entry_meta'));
    }

    function single_entry_meta() {

      global $post;

      $number_comments = get_comments_number();


      $output = '<ul class="meta">
      <li>
      <span class="screen-reader-text">Post author:</span>
      <i class="far fa-user" aria-hidden="true"></i>
      <a href="'. esc_html(get_author_posts_url(get_the_author_meta('ID'))) .'">
      ' . esc_html(get_the_author()) .
      '</a></li>
      <li>
      <span class="screen-reader-text">Post published:</span>
      <i class="far fa-clock" aria-hidden="true"></i>
      <time datetime="' . sprintf('%s-%s-%s', get_the_date('Y'), get_the_date('m'), get_the_date('d')) . '">' . get_the_date() . '</time>
      </li>
      <li>
      <span class="screen-reader-text">Post category:</span>
      <i class="far fa-folder" aria-hidden="true"></i>'
      . get_the_category_list(" / ") .
      '</li>';

      if (comments_open()) {
        if (0 == $number_comments) {
          $output .= '<li><span class="screen-reader-text">Post comments:</span><i class="far fa-comment" aria-hidden="true"></i>' . __('No comments', 'ploverwp') . '</li>';
        } else {
          if ($number_comments > 1) {
            $output .= '<li><span class="screen-reader-text">Post comments:</span><i class="far fa-comment" aria-hidden="true"></i><a href=". get_comments_link() ." title=". $number_comments . ' . __('comments', 'ploverwp') . '">. $number_comments . ' . __('comments', 'ploverwp') . '</a></li>';
          } else {
            $output .= '<li><span class="screen-reader-text">Post comments:</span><i class="far fa-comment" aria-hidden="true"></i><a href=". get_comments_link() ." title="' . __('1 comment', 'ploverwp') . '">' . __('1 comment', 'ploverwp') . '</a></li>';
          }
        }
      } else {
        $output .= '<li><span class="screen-reader-text">Post comments:</span><i class="far fa-comment" aria-hidden="true"></i>' . __('Comments are off for this post', 'ploverwp') . '</li>';
      }

      $output .= '</ul>';

      echo $output;
    }

  }

  new PloverWP_Entry_Meta_Output();
}