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
  slidesPerView: 3.5,
  loop: true,
  speed: 8000,
  spaceBetween: "50px",
  autoplay: {
    delay: 0,
  },
});

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
