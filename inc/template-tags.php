<?php

/**
 * Custom template tags for this theme.
 *
 * @package PloverWP
 */

function ploverwp_unique_id($prefix = '')
{
  static $id_counter = 0;
  if (function_exists('wp_unique_id')) {
    return wp_unique_id($prefix);
  }
  return $prefix . (string) ++$id_counter;
}
