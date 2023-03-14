const swiperBlog = new Swiper(".blog-slider", {
  slidesPerView: 1,
  speed: 400,
  spaceBetween: 30,
  loop: true,
  breakpoints: {
    1241: {
      slidesPerView: 2,
    },
  },
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
});
