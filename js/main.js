"use strict";

let currentModal; //Текущее модальное окно
let modalDialog; //Белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с благодарностью
const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Находим все кнопки вызыватели модальных окон

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
// import JustValidate from "just-validate";
