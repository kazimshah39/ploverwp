<?php

if (!function_exists('ploverwp_footer_bar_config')) {
  function ploverwp_footer_bar_config() {
    return [
      [
        'control' => '3',
        'id' => 'ploverwp_footerbar_layout_divider',
        'label' => 'Layout',
        'section' => 'section-footer-bar',
      ],
      [
        'control' => '6',
        'id' => 'ploverwp_footerbar_layout',
        'default' => '1',
        'transport' => 'postMessage',
        'section' => 'section-footer-bar',
        'choices' => [
          'footerbar-layout-disable' => [
            'value' => '0',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" role="img" id="Layer_1" x="0px" y="0px" width="120.5px" height="81px" viewBox="0 0 120.5 81" enable-background="new 0 0 120.5 81" xml:space="preserve"> <g> <g> <path fill="#0085BA" d="M116.701,80.796H3.799c-1.957,0-3.549-1.592-3.549-3.549V3.753c0-1.957,1.592-3.549,3.549-3.549h112.902 c1.956,0,3.549,1.592,3.549,3.549v73.494C120.25,79.204,118.657,80.796,116.701,80.796z M3.799,1.979 c-0.979,0-1.773,0.797-1.773,1.774v73.494c0,0.979,0.795,1.772,1.773,1.772h112.902c0.979,0,1.773-0.797,1.773-1.772V3.753 c0-0.979-0.795-1.774-1.773-1.774H3.799z"/> </g> </g> <path fill="#0085BA" d="M60.25,19.5c-11.581,0-21,9.419-21,21c0,11.578,9.419,21,21,21c11.578,0,21-9.422,21-21 C81.25,28.919,71.828,19.5,60.25,19.5z M42.308,40.5c0-9.892,8.05-17.942,17.942-17.942c4.412,0,8.452,1.6,11.578,4.249 L46.557,52.078C43.908,48.952,42.308,44.912,42.308,40.5z M60.25,58.439c-4.385,0-8.407-1.579-11.526-4.201l25.265-25.265 c2.622,3.12,4.201,7.141,4.201,11.526C78.189,50.392,70.142,58.439,60.25,58.439z"/> </svg>',
          ],
          'footerbar-layout-1' => [
            'value' => '1',
            'icon' => '<svg aria-labelledby="footer-layout-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" role="img" id="Layer_1" x="0px" y="0px" width="120.5px" height="81px" viewBox="0 0 120.5 81" enable-background="new 0 0 120.5 81" xml:space="preserve"><g><path fill="#0085BA" d="M3.799,0.204h112.902c1.958,0,3.549,1.593,3.549,3.55v73.494c0,1.957-1.592,3.549-3.549,3.549H3.799 c-1.957,0-3.549-1.592-3.549-3.549V3.754C0.25,1.797,1.842,0.204,3.799,0.204z M116.701,79.021c0.979,0,1.774-0.795,1.774-1.773 l0.001-73.494c0-0.979-0.797-1.774-1.775-1.774H3.799c-0.979,0-1.773,0.795-1.773,1.774v73.494c0,0.979,0.795,1.773,1.773,1.773 H116.701z"></path></g><line fill="none" stroke="#0085BA" stroke-miterlimit="10" x1="120.25" y1="58.659" x2="0.965" y2="58.659"></line><g><g><path fill="#0085BA" d="M26.805,64.475h66.89c0.98,0,1.774,0.628,1.774,1.4s-0.794,1.4-1.774,1.4h-66.89 c-0.98,0-1.773-0.628-1.773-1.4C25.031,65.102,25.826,64.475,26.805,64.475z"></path></g></g><g><ellipse fill="#0085BA" cx="72.604" cy="72.174" rx="2.146" ry="2.108"></ellipse><ellipse fill="#0085BA" cx="64.37" cy="72.174" rx="2.147" ry="2.108"></ellipse><ellipse fill="#0085BA" cx="56.132" cy="72.174" rx="2.145" ry="2.108"></ellipse><ellipse fill="#0085BA" cx="47.896" cy="72.174" rx="2.146" ry="2.108"></ellipse></g></svg>',
          ],
          'footerbar-layout-2' => [
            'value' => '2',
            'icon' => '<svg aria-labelledby="footer-layout-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" role="img" id="Layer_1" x="0px" y="0px" width="120.5px" height="81px" viewBox="0 0 120.5 81" enable-background="new 0 0 120.5 81" xml:space="preserve"><g><path fill="#0085BA" d="M120.25,3.754v73.494c0,1.957-1.592,3.549-3.549,3.549H3.799c-1.957,0-3.549-1.592-3.549-3.549V3.754 c0-1.957,1.591-3.55,3.549-3.55h112.902C118.658,0.204,120.25,1.797,120.25,3.754z M116.701,79.021 c0.979,0,1.773-0.795,1.773-1.773V3.754c0-0.979-0.795-1.774-1.773-1.774H3.799c-0.979,0-1.775,0.795-1.775,1.774l0.001,73.494 c0,0.979,0.796,1.773,1.774,1.773H116.701z"></path></g><g><g><path fill="#0085BA" d="M120.25,3.754v73.494c0,1.957-1.592,3.549-3.549,3.549H3.799c-1.957,0-3.549-1.592-3.549-3.549V3.754 c0-1.957,1.591-3.55,3.549-3.55h112.902C118.658,0.204,120.25,1.797,120.25,3.754z M116.701,79.021 c0.979,0,1.773-0.795,1.773-1.773V3.754c0-0.979-0.795-1.774-1.773-1.774H3.799c-0.979,0-1.775,0.795-1.775,1.774l0.001,73.494 c0,0.979,0.796,1.773,1.774,1.773H116.701z"></path></g></g><g><g><g><path fill="#0085BA" d="M63.184,69.175c0,0.979-0.793,1.774-1.773,1.774h-46.89c-0.98,0-1.774-0.795-1.774-1.774 S13.54,67.4,14.521,67.4h46.89C62.389,67.4,63.184,68.194,63.184,69.175z"></path></g></g><g><ellipse fill="#0085BA" cx="79.872" cy="69.175" rx="2.228" ry="2.188"></ellipse><ellipse fill="#0085BA" cx="88.422" cy="69.175" rx="2.229" ry="2.188"></ellipse><ellipse fill="#0085BA" cx="96.974" cy="69.175" rx="2.227" ry="2.188"></ellipse><ellipse fill="#0085BA" cx="105.525" cy="69.175" rx="2.229" ry="2.188"></ellipse></g></g><line fill="none" stroke="#0085BA" stroke-miterlimit="10" x1="120.25" y1="58.659" x2="0.965" y2="58.659"></line></svg>',
          ],
        ]
      ],
      [
        'control' => '1',
        'type' => 'textarea',
        'id' => 'ploverwp_copyright_first_section',
        'default' => 'Copyright [copyright] [current_year] [site_title] | Powered by [theme_author]',
        'transport' => 'postMessage',
        'label' => 'Section 1',
        'section' => 'section-footer-bar',
      ],
      [
        'control' => '1',
        'type' => 'textarea',
        'id' => 'ploverwp_copyright_second_section',
        'transport' => 'postMessage',
        'label' => 'Section 2',
        'section' => 'section-footer-bar',
      ],
      [
        'control' => '3',
        'id' => 'ploverwp_footerbar_color_divider',
        'label' => 'Color',
        'section' => 'section-footer-bar',
      ],
      [
        'control' => '2',
        'id' => 'ploverwp_footerbar_background_color',
        'default' => '#3a3a3a',
        'transport' => 'postMessage',
        'label' => 'Footer Bar Background Color',
        'section' => 'section-footer-bar',
      ]
    ];
  }
}