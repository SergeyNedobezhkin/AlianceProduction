import Swiper from "./js/swiper-bundle.min.js";
const swiperSteps = new Swiper(".steps-slider", {
  slidesPerView: 1,
  speed: 400,
  breakpoints: {
    480: {
      slidesPerView: 1,
    },
    559: {
      slidesPerView: 3,
    },
    1241: {
      slidesPerView: 4,
    },
  },
  navigation: {
    nextEl: ".step-button-next",
    prevEl: ".step-button-prev",
  },
});
