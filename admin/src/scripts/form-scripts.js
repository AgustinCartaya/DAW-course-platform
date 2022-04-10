$(document).ready(function () {});

import {
  alert,
  fileInputTag,
  thumbnail,
  form,
  messages,
} from "./data/variables.js";
import alertInfo from "./functions/alertInfo.js";
import {
  fillThisInputError,
  desactiveInputError,
} from "./functions/outlineErrors.js";

if (fileInputTag) {
  fileInputTag.addEventListener("change", (e) => {
    const file = e.target.files[0];
    if (file) {
      const fileReader = new FileReader();
      fileReader.readAsDataURL(file);
      fileReader.addEventListener("load", (e) => {
        thumbnail.setAttribute("src", e.target.result);
      });
    } else {
      thumbnail.setAttribute(
        "src",
        "https://images.unsplash.com/profile-fb-1642446137-6bae7cc893b9.jpg?dpr=2&auto=format&fit=crop&w=60&h=60&q=60&crop=faces&bg=fff"
      );
    }
  });
}

if (form) {
  form.addEventListener("submit", (e) => {
    alert.classList.add("active");
    const values = new FormData(form);

    if (values.get("user") == "" || values.get("password") == "") {
      e.preventDefault();
      const { type, message, icon } = messages[1];
      fillThisInputError();
      alertInfo(type, message, icon);
    }

    return setTimeout(() => {
      alert.classList.remove("active");
      desactiveInputError();
    }, 2800);
  });
}
