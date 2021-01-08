(function ($) {
  $("head").append(
    '<style type="text/css" class="ploverwp-internal-css"></style>'
  );

  const customizePreview = (obj) => {
    Object.keys(obj).forEach((key) => {
      wp.customize(obj[key].setting, function (value) {
        value.bind(function (to) {
          if (obj[key].css == "internal") {
            let oldCss = new RegExp(`${obj[key].selector}{(.*?)}`, "g");

            let removeOldCss = $(".ploverwp-internal-css").html().replace(oldCss, "");

            $(".ploverwp-internal-css").html(removeOldCss);

            $(".ploverwp-internal-css").append(
              `${obj[key].selector}{${obj[key].style}:${to};}`
            );
          } else {
            $(obj[key].selector).css(obj[key].style, to);
          }
        })
      })
    })
  }

  customizePreview(ploverwpPreviewEls);


})(jQuery);