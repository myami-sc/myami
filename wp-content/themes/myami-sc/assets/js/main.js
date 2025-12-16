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
      lenis.stop();
    } else {
      hbg.removeClass(open);
      lenis.start();
    }
  });
  mask.on("click", function () {
    hbg.removeClass(open);
    lenis.start();
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

jQuery(function () {
  let pos = 0;
  let nav = jQuery("#js-h-nav");

  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() < pos) {
      nav.slideDown();
    } else {
      nav.slideUp();
    }

    pos = jQuery(this).scrollTop();
  });
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
    console.log();
    jQuery.colorbox({
      href: this.src,
      open: true,
      maxWidth: "90%",
      maxHeight: "90%",
    });
    return false;
  });
});

/* news list tab
========================================================= */
jQuery(function () {
  let tabs = jQuery("news-list__tab-item");
  jQuery("news-list__tab-item").on("click", function () {
    jQuery(".active").removeClass("active");
    jQuery(this).addClass("active");
    const index = tabs.index(this);
    jQuery(".content").removeClass("show").eq(index).addClass("show");
  });
});
