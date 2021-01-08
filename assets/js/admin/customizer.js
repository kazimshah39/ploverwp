jQuery(function() {


  // Footer widgets layout

  var custom_footer_layout = document.getElementById('ploverwp-custom-footer-layout')
  var custom_footer_layout_button = document.getElementById('ploverwp-custom-footer-layout-button')

  document.querySelectorAll(".ploverwp-radio-image").forEach(item => {
    item.addEventListener('change', () => {
      custom_footer_layout.style.display = 'none'
    })
  })

  custom_footer_layout_button.addEventListener('change', e => {
    custom_footer_layout.style.display = 'block'
  })

  // //



  const values = ['0', '1,1,1,1,1', '12', '6,6', '4,4,4', '3,3,3,3', '6,3,3'];

  const value = ploverwpFooterLayouts.val

  const hasValue = values.some(e => e === value);

  if (!hasValue) {
    custom_footer_layout_button.checked = true;
  }

  // // // //

  if (custom_footer_layout_button.checked) {
    custom_footer_layout.style.display = 'block'
  }

  // // // //

  custom_footer_layout.addEventListener('input', () => {
    custom_footer_layout_button.checked = true;
  })


});