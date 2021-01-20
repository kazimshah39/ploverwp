jQuery(function() {

  /************************
  * Footer widgets layout
  *************************/

  var custom_footer_layout = document.getElementById('ploverwp-custom-footer-layout')
  var custom_footer_layout_button = document.getElementById('ploverwp-custom-footer-layout-button')

  document.querySelectorAll(".ploverwp-footer-widgets-layout-image").forEach(item => {
    item.addEventListener('change', () => {
      custom_footer_layout.style.display = 'none'
    })
  })

  custom_footer_layout_button.addEventListener('change', e => {
    custom_footer_layout.style.display = 'block'
  })

  // Check custom radio input,
  // if custom value not contains
  // defined values

  let values = ['0', '1,1,1,1,1', '12', '6,6', '4,4,4', '3,3,3,3', '6,3,3'];

  let value = ploverwpFooterLayouts.val

  let hasValue = values.some(e => e === value);

  if (!hasValue) {
    custom_footer_layout_button.checked = true;
  }

  // Visible text area when custom radio input checked

  if (custom_footer_layout_button.checked) {
    custom_footer_layout.style.display = 'block'
  }

  // force custom radio input to checked
  // while trying, without hassle of
  // predefined values

  custom_footer_layout.addEventListener('input', () => {
    custom_footer_layout_button.checked = true;
  })

  /************************
  * Popover
  *************************/

  let ploverwpPopoverToggle = document.querySelectorAll('.ploverwp-popover-toggle')

  ploverwpPopoverToggle.forEach(item => {

    item.addEventListener('click', () => {

      let icon = document.getElementById(item.id)
      let popover_content = icon.nextElementSibling

      if (popover_content.style.display == 'none') {
        popover_content.style.display = 'block'
        icon.classList.add('close')
        icon.innerHTML = '<span class="dashicons dashicons-no"></span>'

      } else {
        popover_content.style.display = 'none'
        icon.classList.remove('close')
        icon.innerHTML = '<span class="dashicons dashicons-editor-help"></span>'
      }

    })
  })

  /************************
  * Hide Controls
  *************************/
  function hideControl(el, arr, pref) {
    let element = document.getElementById(el)
    if (element.checked) {
      arr.forEach(item => {
        document.getElementById(pref+item).style.display = 'none'
      })
    }

    element.addEventListener('change', () => {
      arr.forEach(item => {
        document.getElementById(pref+item).style.display = 'none'
      })
    })
  }

  function showControl(el, arr, pref) {

    el.forEach(item => {
      document.getElementById(item).addEventListener('change',
        () => {
          arr.forEach(item => {
            document.getElementById(pref+item).style.display = 'block'
          })
        })
    })
  }


  // Hide controls if footer bar == none

  var footerBarLayouts =
  [
    'footerbar-layout-1',
    'footerbar-layout-2'
  ]

  var footerBarControls =
  [
    'ploverwp_copyright_first_section',
    'ploverwp_copyright_second_section',
  ]

  hideControl('footerbar-layout-disable', footerBarControls, 'customize-control-')
  showControl(footerBarLayouts, footerBarControls, 'customize-control-')

  /* jQuery(function() { */
});