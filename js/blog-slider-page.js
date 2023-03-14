import Swiper from "./js/swiper-bundle.min.js";
const swiperBlogPage = new Swiper(".blog-slider-page", {
  slidesPerView: 1,
  speed: 400,
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return (
        ' <div class="box ' +
        className +
        '"> <div class="swiper-pagination-number">' +
        (index < 10 ? +(index + 1) : index + 1) +
        "</div> </div>"
      );
    },
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
    1200: {
      slidesPerView: 1,
    },
  },
});
