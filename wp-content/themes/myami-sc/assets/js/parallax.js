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

const image4 = document.getElementsByClassName("js-parallax-4");
new SimpleParallax(image4, {
  delay: 1,
  transition: "cubic-bezier(0,0,0,.1)",
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

// load
gsap.from(".js-fade-title", {
  duration: 1,
  y: 50,
  opacity: 0,
  ease: "power2.out",
});

gsap.from(".js-fade-text", {
  duration: 1,
  y: 30,
  opacity: 0,
  delay: 0.2,
});

gsap.from(".js-fade-card", {
  duration: 1,
  y: 50,
  opacity: 0,
  stagger: 0.2,
  delay: 0.4,
});

/* loop
========================================================= */
const track = document.querySelector(".marquee__track");
track.innerHTML += track.innerHTML;

const itemsWidth = track.scrollWidth / 2;

gsap.to(track, {
  x: -itemsWidth,
  duration: 7,
  ease: "none",
  repeat: -1,
});
