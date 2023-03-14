import Swiper from "./js/swiper-bundle.min.js";
const swiper = new Swiper(".features-slider", {
  speed: 400,
  slidesPerView: 5,
  breakpoints: {
    220: {
      slidesPerView: 2,
    },
    650: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 3,
    },
    1241: {
      slidesPerView: 5,
    },
  },
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
});
