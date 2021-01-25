<?php
$current_year = date_i18n(_x('Y ', 'copyright date format', 'ploverwp'));

$helper_strings = [
  '[copyright]',
  '[current_year]',
  '[site_title]',
  '[theme_author]'
];

$replace_helper_strings = [
  '&copy;',
  $current_year,
  get_bloginfo('name'),
  '<a href="https://www.webplover.com/">WebPlover</a>'
];

$default = $replace_helper_strings;
array_splice($default, 3, 0, ' | Powered By');
$default = 'Copyright ' . implode(' ', $default);

$copyright_txt = get_theme_mod('ploverwp_copyright_first_section', $default);
echo str_replace($helper_strings, $replace_helper_strings, $copyright_txt);