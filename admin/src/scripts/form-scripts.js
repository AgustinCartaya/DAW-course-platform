$(document).ready(function () {
  console.log("hola");
});

import {
  alert,
  allInputTags,
  fileInputTag,
  thumbnail,
  form,
  messages,
} from "./data/variables.js";
import { validUserName } from "./functions/FormValidation.js";
import alertInfo from "./functions/alertInfo.js";

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

form.addEventListener("click", (e) => {
  // e.preventDefault();
  alert.classList.add("active");
  const values = new FormData(form);
  if (values.get("user") == "" || values.get("password") == "") {
    const { type, message, icon } = messages[1];
    alertInfo(type, message, icon);
    console.log("Rellena los inputs");
  } else if (validUserName(values.get("user"))) {
    const { type, message, icon } = messages[2];
    alertInfo(type, message, icon);
    console.log("usuario invalido: " + values.get("user"));
  } else {
    const { type, message, icon } = messages[0];
    alertInfo(type, message, icon);
    console.log(
      "Datos enviados con exito: " + values.get("user"),
      values.get("password")
    );

    // fetch("http://localhost/DAW-project/admin/src/controllers/signin.php", {
    //     method: "POST",
    //     body: values

    // })
    // .then((res) => res.json())
    // .then((data) => console.log(data));
    // }
    fetch("http://localhost/DAW-project/admin/src/controllers/signin.php", {
      method: "POST",
      body: values,
    })
      .then((response) => response.json())
      .catch((error) => console.error("Error:", error))
      .then((response) => console.log("Success:", response));
  }

  return setTimeout(() => {
    alert.classList.remove("active");
  }, 2800);
});

// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   console.log("enviando");
//   $.get( "../controllers/signin.php", { user: "admin", password: "1234" } );
// $.ajax({
//   type: "get",
//   url:  "../controllers/signin.php",
//   data:  { user: "admin", password: "1234" },
// });
// alert.classList.add("active");
// const values = new FormData(form);
// console.log(values.get("password"));

//   fetch("./../controllers/signin.php", {
//     method: "POST",
//     body: values,
//   })
//     .then((res) => res.json())
//     .then((data) => console.log(data));

// return setTimeout(() => {
//   alert.classList.remove("active");
// }, 2800);
// });
