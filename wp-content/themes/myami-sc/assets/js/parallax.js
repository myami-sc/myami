gsap.config({
  nullTargetWarn: false,
});

/* parallax
========================================================= */
const image = document.getElementsByClassName("js-parallax");
new SimpleParallax(image, {
  delay: 3,
  orientation: "down",
  scale: 1.5,
});

const image2 = document.getElementsByClassName("js-parallax-2");
new SimpleParallax(image2, {
  delay: 2.3,
  orientation: "down",
  scale: 1.5,
});

const image3 = document.getElementsByClassName("js-parallax-3");
new SimpleParallax(image3, {
  delay: 2.3,
  orientation: "down",
  scale: 1.5,
});

/* scroll
========================================================= */
const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

/* fade
========================================================= */
// in
gsap.to(".js-fade-in", {
  scrollTrigger: {
    trigger: ".js-fade-in",
    start: "top 80%",
    end: "top 30%",
    scrub: true,
  },
  opacity: 1,
  scaleX: 1,
  duration: 1,
});

// up
document.querySelectorAll(".js-fade-up").forEach((el) => {
  ScrollTrigger.create({
    trigger: el,
    start: "top 80%",
    toggleClass: { targets: el, className: "--show" },
  });
});
