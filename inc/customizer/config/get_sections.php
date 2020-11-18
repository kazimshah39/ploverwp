<?php

require get_template_directory() . '/inc/customizer/colors/sections.php';



if (! function_exists('ploverwp_get_sections')) {


  function ploverwp_get_sections() {

    return array_merge(
      ploverwp_colors_sections(),
    );

  }
}