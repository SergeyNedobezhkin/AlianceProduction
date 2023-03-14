"use strict";
const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const isFront = document.body.classList.contains("front-page");
const menu = document.querySelector(".mobile-menu");
const pageWidth = document.documentElement.scrollWidth;

const lightModeOn = (e) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (e) => {
  if (isFront) {
    navbar.classList.remove("navbar-light");
  }
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

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

//Вкл или выкл светлый режим шапки сайта.
window.addEventListener("scroll", () => {
  if (pageWidth > 750) {
    this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  }
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (e) => {
  e.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
