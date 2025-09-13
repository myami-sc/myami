/* swiper
========================================================= */
const mainSwiper = new Swiper(".main-swiper", {
  loop: true,
  speed: 8000,
  autoplay: {
    delay: 0,
  },
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
});

const topicsSwiper = new Swiper(".topics-swiper", {
  slidesPerView: "auto",
  spaceBetween: "50px",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: false,
  },
});
