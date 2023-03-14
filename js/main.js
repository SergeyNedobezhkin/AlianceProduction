"use strict";
const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");
const pageWidth = document.documentElement.scrollWidth;

let currentModal; //Текущее модальное окно
let modalDialog; //Белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с благодарностью
const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Находим все кнопки вызыватели модальных окон

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

modalButtons.forEach((button) => {
  // клик по переключателю

  button.addEventListener("click", (e) => {
    e.preventDefault();
    // определяем текущее открытое окно
    currentModal = document.querySelector(button.dataset.target);
    //Открываем текущее окно
    currentModal.classList.toggle("is-open");
    //назначаем текущее белое диалоговое окно
    modalDialog = currentModal.querySelector(".modal-dialog");
    //отслеживаем клик по окну и пустым областям
    currentModal.addEventListener("click", (e) => {
      //если клик мимо то закрываем диалоговое окно
      if (!e.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});
//ловим событие нажатие на кнопки
document.addEventListener("keyup", (e) => {
  if (e.key === "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); // Собираем все формы
forms.forEach((form) => {
  let selector = document.querySelector("input[type='tel']");
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя!",
      },
      {
        rule: "maxLength",
        value: 30,
        errorMessage: "Максимально 30 символов",
      },
      {
        rule: "minLength",
        value: 3,
        errorMessage: "Минимально 3 символа",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон!",
      },
      {
        rule: "minLength",
        value: 15,
        errorMessage: "Номер введен неверно!",
      },
    ])

    .onSuccess((e) => {
      const thisForm = e.target;
      const formData = new FormData(thisForm); //данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alertModal.classList.add("is-open");
            currentModal.classList.remove("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            //отслеживаем клик по окну и пустым областям
            currentModal.addEventListener("click", (e) => {
              //если клик мимо то закрываем диалоговое окно
              if (!e.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert("Ошибка: " + response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
