(function() {
  "use strict";

  /**
   * SCROLL NAVBAR (متوافق مع الهيدر الجديد)
   */
  function toggleScrolled() {
    const navbar = document.querySelector('.ai-navbar');
    if (!navbar) return;

    navbar.classList.toggle('scrolled', window.scrollY > 50);
  }

  window.addEventListener('load', toggleScrolled);
  document.addEventListener('scroll', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    const body = document.querySelector('body');
    if (!body || !mobileNavToggleBtn) return;

    body.classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on click
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Toggle mobile dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();

      if (!this.parentNode || !this.parentNode.nextElementSibling) return;

      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (!scrollTop) return;

    window.scrollY > 100
      ? scrollTop.classList.add('active')
      : scrollTop.classList.remove('active');
  }

  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  }

  /**
   * AOS
   */
  function aosInit() {
    if (typeof AOS === "undefined") return;

    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * GLightbox
   */
  if (typeof GLightbox !== "undefined") {
    GLightbox({
      selector: '.glightbox'
    });
  }

  /**
   * Swiper
   */
  function initSwiper() {
    if (typeof Swiper === "undefined") return;

    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let configEl = swiperElement.querySelector(".swiper-config");
      if (!configEl) return;

      let config = JSON.parse(configEl.innerHTML.trim());
      new Swiper(swiperElement, config);
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * FAQ
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach(item => {
    item.addEventListener('click', () => {
      if (!item.parentNode) return;
      item.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Scrollspy (تم تعطيله لو مفيش navmenu)
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    if (!navmenulinks.length) return;

    navmenulinks.forEach(link => {
      if (!link.hash) return;

      let section = document.querySelector(link.hash);
      if (!section) return;

      let position = window.scrollY + 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(el => el.classList.remove('active'));
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();