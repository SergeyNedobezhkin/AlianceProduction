"use strict";
document.addEventListener("DOMContentLoaded", (e) => {
  let phoneInputs = document.querySelectorAll("input[data-tel-input]");

  let onPhoneInput = function (e) {
    let input = e.target;
    let inputValue = input.value;
    console.log("inputValue", inputValue);
  };

  for (let i = 0; i < phoneInputs.length; i++) {
    let input = phoneInputs[i];
    input.addEventListener("input", onPhoneInput);
  }
});
