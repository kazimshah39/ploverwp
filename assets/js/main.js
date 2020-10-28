(function ($) {
  // Set header margin top according to admin bar

  function headerMarginTop() {
    let adminBarHeight = $("#wpadminbar").outerHeight();
    $("#wpadminbar").css("position", "fixed");
    $("#header").css("top", adminBarHeight);
    $(".mobile-nav-toggle").css("top", adminBarHeight + 15);
    $(".mobile-nav").css("top", adminBarHeight + 50);
  }

  if ($("#wpadminbar") && $("#wpadminbar").css("display") != "none") {

    headerMarginTop();

    $(window).resize(function () {
      headerMarginTop();
    });
  }


})(jQuery);