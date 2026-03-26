gsap.config({
  nullTargetWarn: false,
});

/* parallax
========================================================= */
const isSP = window.innerWidth < 768;

function createParallax(selector, delay, scale) {
  const el = document.querySelectorAll(selector);
  if (!el.length) return;

  new SimpleParallax(el, {
    delay: isSP ? 0.6 : delay,
    scale: isSP ? 1.2 : scale,
    orientation: "down",
    overflow: true,
  });
}

createParallax(".js-parallax", 3, 1.5);
createParallax(".js-parallax-2", 2.3, 1.5);
createParallax(".js-parallax-3", 2.3, 1.5);
createParallax(".js-parallax-4", 1, 1.3);

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

/* overlap scroll
========================================================= */
gsap.utils.toArray(".section.--overlap").forEach((section) => {
  gsap.to(section, {
    y: 0,
    opacity: 1,
    scrollTrigger: {
      trigger: section,
      start: "top 85%",
      end: "top 40%",
    },
  });
});

/* loop
========================================================= */
const track = document.querySelector(".marquee__track");

if (track) {
  track.innerHTML += track.innerHTML;

  const itemsWidth = track.scrollWidth / 2;

  gsap.to(track, {
    x: -itemsWidth,
    duration: 7,
    ease: "none",
    repeat: -1,
  });
}

/* ScrollTrigger refresh
========================================================= */
window.addEventListener("load", () => {
  ScrollTrigger.refresh();
});
