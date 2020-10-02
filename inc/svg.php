<?php

if (!function_exists('ploverwp_svg')) {
  function ploverwp_svg($name) {
    switch ($name) {
      case "bars":
        echo '<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
  <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163
    16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16
    16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16
    7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163
    16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
  </path>
</svg>';
        break;
      case "cross":
        echo '<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
  <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19
    0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48
    0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24
    22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28
    12.28-32.19 0-44.48L242.72 256z">
  </path>
</svg>';
        break;
      case "angle-up":
        echo '<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
  <path fill="currentColor" d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9
    0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z">
  </path>
</svg>';
        break;
      case "angle-down":
        echo '<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32
  0 512"><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4
    24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136
    136c-9.2 9.4-24.4 9.4-33.8 0z">
  </path>
</svg>';
        break;
      default:
        echo "Invalid SVG name.";
      }
    }
  }