const menuComponent = document.querySelector("#mobileMenu");
const bodyElement = document.body;

function openMobileMenu() {
  bodyElement.classList.toggle('menuIsOpen');
  menuComponent.classList.toggle('menuIsOpen');
}

function closeMobileMenu() {
  menuComponent.classList.toggle('menuIsOpen');
  bodyElement.classList.toggle('menuIsOpen');
}

$(window).scroll(function () {
  const header = $("header");

  const scroll = $(window).scrollTop();

  if (scroll >= 80) {
      header.removeClass('fixedHeader').addClass("scrollHeader");
  } else {
      header.removeClass("scrollHeader").addClass('fixedHeader');
  }
});

AOS.init({
  disable: false, 
  startEvent: 'DOMContentLoaded',
  initClassName: 'aos-init',
  animatedClassName: 'aos-animate',
  useClassNames: false,
  disableMutationObserver: false,
  debounceDelay: 50, 
  throttleDelay: 99,

  offset: 120, 
  delay: 0, 
  duration: 400, 
  easing: 'ease', 
  once: true, 
  mirror: false,
  anchorPlacement: 'top-bottom',
});


