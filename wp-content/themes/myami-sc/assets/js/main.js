/* tab
========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  // タブボタンを全て取得
  const tabs = document.querySelectorAll(".l-header-nav__item");

  // タブコンテンツを全て取得
  const contents = document.querySelectorAll(".content");

  // 各タブボタンにクリックイベントを設定
  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      // 全てのタブからactiveクラスを削除
      tabs.forEach((tab) => tab.classList.remove("active"));

      // 全てのコンテンツからactiveクラスを削除
      contents.forEach((content) => content.classList.remove("active"));

      // クリックされたタブとそれに対応するコンテンツにactiveクラスを付与
      tab.classList.add("active");
      contents[index].classList.add("active");
    });
  });
});

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

const modal = document.querySelector("#cc-main");
modal.addEventListener("wheel", (e) => {
  e.stopPropagation();
});
