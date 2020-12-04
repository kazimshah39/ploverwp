(function($) {


  // Mobile Navigation

  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-md-none'
    });
    $('#header .header-inner').append($mobile_nav);

    $(document).on('click',
      '.mobile-nav-toggle',
      function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
        $('.mobile-nav-overly').toggle();
      });

    $(document).on('click',
      '.mobile-nav .menu-item-has-children > a',
      function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('current-m-item');
      });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }



  if ($('body').hasClass("sticky-header-enabled")) {

    // Toggle .header-scrolled class to #header when page is scrolled

    $('#header').addClass('fixed-top');
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
      } else {
        $('#header').removeClass('header-scrolled');
      }
    });

  }

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  })


  // Set sticky header and #site-content margin top

  if ($('body').hasClass("sticky-header-enabled")) {

    var adminBarHeight = $("#wpadminbar").outerHeight();
    var headerHeight = $("#header").outerHeight();

    function stickyHeaderMarginTop() {

      $("#wpadminbar").css("position",
        "fixed");
      $("#header").css("top",
        adminBarHeight);
      $(".mobile-nav").css("top",
        headerHeight/1.4+adminBarHeight);

      $("#site-content").css("margin-top",
        headerHeight+32);
    }
    if ($("#wpadminbar").length && $("#wpadminbar").css("display") != "none") {

      stickyHeaderMarginTop();

      $(window).resize(function () {
        stickyHeaderMarginTop();
      });
    } else {

      $("#site-content").css("margin-top", headerHeight+32);
      $(".mobile-nav").css("top", headerHeight/1.4);
    }
  } else {

    $(".mobile-nav").css("top", $("#header").outerHeight()/1.4);
  }

  // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });



})(jQuery);