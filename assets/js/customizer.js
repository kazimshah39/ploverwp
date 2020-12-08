(function($) {

  const customizePreview = (obj) => {
    Object.keys(obj).forEach(key => {
      wp.customize(obj[key].setting, function(value) {
        value.bind(function(to) {
          $(obj[key].selector).css(obj[key].style, to)
        })
      })
    })
  }


  customizePreview(ploverwpPreviewEls)

})(jQuery)