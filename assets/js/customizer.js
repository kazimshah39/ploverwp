(function($) {

  // Background Color
  wp.customize('site_background_color', function(value) {
    value.bind(function(to) {
      $('#site-content').css('background', to);
    });
  });

  // Header Background Color
  wp.customize('header_background_color', function(value) {
    value.bind(function(to) {
      $('#header').css('background-color', to);
    });
  });

  // Footer Background Color
  wp.customize('footer_background_color', function(value) {
    value.bind(function(to) {
      $('#footer').css('background-color', to);
    });
  });

})(jQuery);