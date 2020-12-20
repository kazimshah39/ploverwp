const body = document.querySelector("body");

function ploverwpBreakpoint() {
  if (window.matchMedia("(max-width: 767.98px)").matches) {
      body.classList.remove("ploverwp-is-desktop");
      body.classList.add("ploverwp-is-mobile");
    } else {
        body.classList.remove("ploverwp-is-mobile");
        body.classList.add("ploverwp-is-desktop");
  }
}

// Add breakpoint class to body
ploverwpBreakpoint()

// Resize Event Listener
window.addEventListener("resize", function () {
  // Add breakpoint class to body when window resize
  ploverwpBreakpoint();
});
