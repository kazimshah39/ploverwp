(function ($) {
  // Set header margin top according to admin bar

  function headerMarginTop() {
    let adminBarHeight = $("#wpadminbar").outerHeight();
    let headerHeight = $("#header").outerHeight();
    $("#wpadminbar").css("position", "fixed");
    $("#header").css("top", adminBarHeight);
    $(".mobile-nav").css("top", headerHeight/1.4+adminBarHeight);
  }

  if ($("#wpadminbar").length && $("#wpadminbar").css("display") != "none") {

    headerMarginTop();

    $(window).resize(function () {
      headerMarginTop();
    });
  } else {
    $(".mobile-nav").css("top", $("#header").outerHeight()/1.4);
  }


})(jQuery);