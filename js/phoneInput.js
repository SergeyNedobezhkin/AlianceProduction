"use strict";
document.addEventListener("DOMContentLoaded", (e) => {
  let phoneInputs = document.querySelectorAll("[name=userphone]");

  let getInputNumberValue = function (input) {
    return input.value.replace(/\D/g, "");
  };

  let onPhoneInput = function (e) {
    let input = e.target;
    let inputNumbersValue = getInputNumberValue(input);
    let formatedInputValue = "";
    let selectionStart = input.selectionStart;
    if (!inputNumbersValue) {
      return (input.value = "");
    }

    if (input.value.length != selectionStart) {
      if (e.data && /\D/g.test(e.data)) {
        input.value = inputNumbersValue;
      }

      return;
    }

    if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
      //Российский номер
      if (inputNumbersValue[0] === "9") {
        inputNumbersValue = "7" + inputNumbersValue;
      }
      let firstSymbols = inputNumbersValue[0] === "8" ? "8" : "+7";
      formatedInputValue = firstSymbols + " ";
      if (inputNumbersValue > 1) {
        formatedInputValue += "(" + inputNumbersValue.substring(1, 4);
      }
      if (inputNumbersValue.length >= 5) {
        formatedInputValue += ")" + inputNumbersValue.substring(4, 7);
      }

      if (inputNumbersValue.length >= 8) {
        formatedInputValue += "-" + inputNumbersValue.substring(7, 9);
      }
      if (inputNumbersValue.length >= 10) {
        formatedInputValue += "-" + inputNumbersValue.substring(9, 11);
      }
    } else {
      // Номер не из РФ.
      formatedInputValue = input.value =
        "+" + inputNumbersValue.substring(0, 16);
    }
    input.value = formatedInputValue;
  };

  let onPhoneKeyDown = function (e) {
    let input = e.target;
    if (e.keyCode === 8 && getInputNumberValue(input).length === 1) {
      input.value = "";
    }
  };

  let onPhonePaste = function (e) {
    let input = e.target;

    let pasted = e.clipboardData || window.clipboardData;
    let inputNumbersValue = getInputNumberValue(input);
    if (pasted) {
      let pastedText = pasted.getData("Text");
      if (/\D/g.test(pastedText)) {
        input.value = inputNumbersValue;
      }
    }
  };

  for (let i = 0; i < phoneInputs.length; i++) {
    let input = phoneInputs[i];

    input.addEventListener("input", onPhoneInput);
    input.addEventListener("keydown", onPhoneKeyDown);
    input.addEventListener("paste", onPhonePaste);
  }
});
