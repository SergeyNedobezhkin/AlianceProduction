"use strict";
const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (e) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
};
const lightModeOff = (e) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
};

//функция открывания меню
const openMenu = (e) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрещаем прокрутку сайта под меню
  lightModeOn();
};
//функция закрывания меню
const closeMenu = (e) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //возвращает прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});
mMenuToggle.addEventListener("click", (e) => {
  e.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

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

const modal = document.querySelector(".modal");
const modalMenu = document.querySelector("menu");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelectorAll(".modal-close");

modalToggle.forEach((elem) => {
  elem.addEventListener("click", (e) => {
    e.preventDefault();
    modal.classList.add("is-open");
  });
});
modalClose.forEach((elem) => {
  elem.addEventListener("click", (e) => {
    e.preventDefault();
    modal.classList.remove("is-open");
  });
});

modalMenu.addEventListener("click", (e) => {
  e.preventDefault();
  if (e.target === modalClose || e.target === modalMenu) {
    return modal.classList.remove("is-open");
  }
});
