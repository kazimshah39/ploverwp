const body = document.querySelector('body')
const navMenu = document.querySelector('#nav-menu')
const header = document.querySelector('#header')
const innerHeader = document.querySelector('#header .header-inner')
const mobileNavToggle = document.querySelector('.mobile-nav-toggle')
const mobileNavToggleIcon = document.querySelector('.mobile-nav-toggle i')
const mobileNavOverlay = document.querySelector('.mobile-nav-overly')
const backToTop = document.querySelector('.back-to-top')

if (navMenu) {

  // Clone nav menu for mobile
  const mobNavMenu = navMenu.cloneNode(true)
  mobNavMenu.className = 'mobile-nav d-md-none'
  innerHeader.append(mobNavMenu)

  // Toggle Mob Menu
  function toggleMobMenu() {
    mobileNavToggleIcon.classList.toggle('fa-bars')
    mobileNavToggleIcon.classList.toggle('fa-times')
    mobileNavOverlay.classList.toggle('d-block')
    body.classList.toggle('mobile-nav-active')
  }

  mobileNavToggle.addEventListener('click', () => {
    toggleMobMenu()
  })

  mobileNavOverlay.addEventListener('click', () => {
    toggleMobMenu()
  })


  // preventDefault when click on menu item which have childs
  document.querySelectorAll('.mobile-nav .menu-item-has-children > a').forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault()
      e.target.nextElementSibling.classList.toggle('d-block')
      e.target.parentNode.classList.toggle('current-m-item')
    })
  })

  // Sticky Header
  window.addEventListener('scroll', () => {
    if (body.classList.contains('sticky-header-enabled')) {
      if (this.scrollY > 100) {
        header.classList.add('header-scrolled')
      } else {
        header.classList.remove('header-scrolled')
      }
    }
  })

  // Set .mobile-nav margin top
  const adminBar = document.querySelector('#wpadminbar')
  const mobNav = document.querySelector('.mobile-nav')

  if (adminBar) {
    mobNav.style.top = header.offsetHeight / 1.4 + adminBar.offsetHeight + 'px'
  } else {
    mobNav.style.top = header.offsetHeight / 1.4 + 'px'
  }

}

// Back to top button
window.addEventListener('scroll', () => {
  if (this.scrollY > 100) {
    backToTop.classList.add('d-block')
  } else {
    backToTop.classList.remove('d-block')
  }
})

// Go to top by click on back-to-top
backToTop.addEventListener('click',
  () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  })

// Preloader
const preloader = document.querySelector('#preloader')

window.onload = () => {
  if (preloader) {
    setTimeout(() => {
      preloader.classList.add('preloader-transition')
    }, 100)
  }
}