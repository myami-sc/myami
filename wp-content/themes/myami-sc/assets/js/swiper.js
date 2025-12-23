/* --------------------------------------------------------------
swiper
-------------------------------------------------------------- */
/* main
========================================================= */
const mainSwiper = new Swiper(".main-swiper", {
  loop: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 1500,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
    renderFraction: function (currentClass, totalClass) {
      return (
        '<span class="' +
        currentClass +
        '"></span>' +
        '<span class="border js-border"><span></span></span>' +
        '<span class="' +
        totalClass +
        '"></span>'
      );
    },
    formatFractionCurrent: function (number) {
      if (number < 10) {
        return "0" + number;
      } else {
        return number;
      }
    },
  },
  on: {
    init: function () {
      setTimeout(() => {
        const pagiNation = document.querySelector(".swiper-pagination");
        pagiNation.classList.add("is-active");
      }, 100);
    },
    slideChangeTransitionStart: function () {
      const border = document.querySelector(".js-border span");
      if (border) {
        border.style.transform = "scaleX(0)";
        border.style.transitionDuration = "0s";
      }
    },
    slideChangeTransitionEnd: function () {
      const border = document.querySelector(".js-border span");
      if (border) {
        border.style.transform = "scaleX(1)";
        border.style.transitionDuration = "4000ms";
      }
    },
  },
});

/* topics
========================================================= */
const topicsSwiper = new Swiper(".topics-swiper", {
  slidesPerView: "auto",
  spaceBetween: "50px",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar-topics",
    hide: false,
  },
});
const topicsSwiperFashion = new Swiper(".topics-swiper-fashion", {
  slidesPerView: "auto",
  spaceBetween: "50px",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar-fashion",
    hide: false,
  },
});
const topicsSwiperFood = new Swiper(".topics-swiper-food", {
  slidesPerView: "auto",
  spaceBetween: "50px",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar-food",
    hide: false,
  },
});
const topicsSwiperEnjoy = new Swiper(".topics-swiper-enjoy", {
  slidesPerView: "auto",
  spaceBetween: "50px",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar-enjoy",
    hide: false,
  },
});
const topicsSwiperLifestyle = new Swiper(".topics-swiper-lifestyle", {
  slidesPerView: "auto",
  spaceBetween: "50px",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar-lifestyle",
    hide: false,
  },
});
