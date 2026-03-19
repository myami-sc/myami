/* home tab
========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".l-header-nav__item");

  const contents = document.querySelectorAll(".content");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      tabs.forEach((tab) => tab.classList.remove("active"));

      contents.forEach((content) => content.classList.remove("active"));

      tab.classList.add("active");
      contents[index].classList.add("active");
    });
  });
});

/* hamburger menu
========================================================= */
jQuery(function () {
  let hbg = jQuery("#js-hamburger");
  let btn = jQuery(".toggle-btn");
  let mask = jQuery(".mask");
  let open = "--open";
  btn.on("click", function () {
    if (!hbg.hasClass(open)) {
      hbg.addClass(open);
      if (typeof lenis !== "undefined") lenis.stop();
    } else {
      hbg.removeClass(open);
      if (typeof lenis !== "undefined") lenis.start();
    }
  });
  mask.on("click", function () {
    hbg.removeClass(open);
    if (typeof lenis !== "undefined") lenis.start();
  });
});

/* modal
========================================================= */

const modal = document.querySelector("#cc-main");

if (modal) {
  modal.addEventListener("wheel", (e) => {
    e.stopPropagation();
  });
}

/* header scroll
========================================================= */
const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

jQuery(function () {
  let pos = 0;
  let nav = jQuery(".js-h-nav");

  if (typeof lenis !== "undefined") {
    lenis.on("scroll", ({ scroll }) => {
      if (scroll < pos) {
        nav.removeClass("is-hide");
      } else {
        nav.addClass("is-hide");
      }
      pos = scroll;
    });
  }
});

jQuery(function ($) {
  const $inner = $(".l-header__inner");
  const $news = $(".l-header__news");
  const $logo = $(".l-header-logo");
  const $hbg = $("#js-hamburger");

  if (typeof lenis !== "undefined") {
    lenis.on("scroll", ({ scroll }) => {
      if ($hbg.hasClass("--open")) return;

      if (scroll > 10) {
        $inner.addClass("--scrolled");
        $news.addClass("--scrolled");
        $logo.addClass("--scrolled");
      } else {
        $inner.removeClass("--scrolled");
        $news.removeClass("--scrolled");
        $logo.removeClass("--scrolled");
      }
    });
  }
});

/* shop list tab
========================================================= */
if (document.querySelector("#tab")) {
  let tavsV = document.getElementById("tab").getElementsByClassName("tab-elem");
  let pagesV = document
    .getElementById("tabbody")
    .getElementsByClassName("tabbody-elem");

  function changeTabV() {
    let targetIdV = this.dataset.tabid;

    for (let i = 0; i < pagesV.length; i++) {
      if (pagesV[i].id != targetIdV) {
        pagesV[i].style.display = "none";
      } else {
        pagesV[i].style.display = "block";
      }
    }

    for (let i = 0; i < tavsV.length; i++) {
      tavsV[i].classList.remove("active");
    }
    this.classList.add("active");
  }

  for (let i = 0; i < tavsV.length; i++) {
    tavsV[i].onclick = changeTabV;
  }

  tavsV[0].onclick();
}

/* colorbox
========================================================= */
jQuery(document).ready(function () {
  jQuery(".colorbox-img").on("click", function () {
    jQuery.colorbox({
      href: this.src,
      current: true,
      maxWidth: "90%",
      maxHeight: "90%",
    });
    return false;
  });
});

/* access hover item
========================================================= */
jQuery(function () {
  jQuery(".js-hover-item").hover(function () {
    jQuery(".js-hover-item").removeClass("--current");
    jQuery(this).addClass("--current");
  });
});

/* scroll action
========================================================= */
gsap.registerPlugin(ScrollTrigger);

const area1 = document.querySelector(".area1");
const area2 = document.querySelector(".area2");
const area3 = document.querySelector(".area3");
const step1 = document.querySelector(".s1");
const step2 = document.querySelector(".s2");
const step3 = document.querySelector(".s3");

if (area1 && step1) {
  ScrollTrigger.create({
    trigger: area1,
    start: "top center",
    end: "bottom top",
    onEnter: () => step1.classList.add("is-active"),
    onLeave: () => step1.classList.remove("is-active"),
    onEnterBack: () => step1.classList.add("is-active"),
    onLeaveBack: () => step1.classList.remove("is-active"),
  });
}
if (area2 && step2) {
  ScrollTrigger.create({
    trigger: area2,
    start: "top center",
    end: "bottom top",
    onEnter: () => step2.classList.add("is-active"),
    onLeave: () => step2.classList.remove("is-active"),
    onEnterBack: () => step2.classList.add("is-active"),
    onLeaveBack: () => step2.classList.remove("is-active"),
  });
}
if (area3 && step3) {
  ScrollTrigger.create({
    trigger: area3,
    start: "top center",
    end: "bottom top",
    onEnter: () => step3.classList.add("is-active"),
    onLeave: () => step3.classList.remove("is-active"),
    onEnterBack: () => step3.classList.add("is-active"),
    onLeaveBack: () => step3.classList.remove("is-active"),
  });
}
