import "./styles.css";
import messages from "./data/messages.json";
import alertInfo from "./functions/alertInfo";
import validEmail from "./functions/validEmail";
import {
  fillThisInputError,
  invalidInput,
  desactiveInputError
} from "./functions/outlineErrors";
import {
  fillThisInputSucess,
  desactiveInputSuccess
} from "./functions/oulineSuccess";
import {
  btnSubmit,
  popup,
  inputs,
  inputValues,
  inputFile,
  avatar,
  genders,
  changeMode
} from "./data/variables";

if (inputFile) {
  inputFile.addEventListener("change", (e) => {
    const file = e.target.files[0];
    if (file) {
      const fileReader = new FileReader();
      fileReader.readAsDataURL(file);
      fileReader.addEventListener("load", (e) => {
        avatar.setAttribute("src", e.target.result);
      });
    } else {
      avatar.setAttribute(
        "src",
        "https://images.unsplash.com/profile-fb-1642446137-6bae7cc893b9.jpg?dpr=2&auto=format&fit=crop&w=60&h=60&q=60&crop=faces&bg=fff"
      );
    }
  });
}

if (btnSubmit) {
  btnSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    popup.classList.add("active");

    const values = inputValues();
    const [
      image,
      name,
      lastname,
      date,
      email,
      password,
      repeatPassword
    ] = values;
    const [, , , , InputEmail, InputPassword, InputRepeatPassword] = inputs;

    const gender = genders.value;
    if (values.some((inputValue) => inputValue === "")) {
      const { type, message, icon } = messages[1];
      alertInfo(type, message, icon);
      fillThisInputError();
      console.log("Rellenar los inputs");
    } else if (validEmail(email)) {
      const { type, message, icon } = messages[2];
      alertInfo(type, message, icon);
      invalidInput(InputEmail);
      console.log("Email invalido");
    } else if (password !== repeatPassword) {
      const { type, message, icon } = messages[3];
      alertInfo(type, message, icon);
      invalidInput(InputPassword);
      invalidInput(InputRepeatPassword);
      console.log("Las contraseñas no son iguales");
    } else {
      const { type, message, icon } = messages[0];
      alertInfo(type, message, icon);
      genders.style.outline = "1px solid #43a854";
      fillThisInputSucess();
      console.log(`Los datos han sido enviado con exito,
      imagen: ${image}, nombre y apellido: ${name}
      ${lastname}, fecha de nacimiento: ${date}, correo: ${email},
      genero: ${gender}`);
    }

    return setTimeout(() => {
      popup.classList.remove("active");
      genders.style.outline = "unset";
      desactiveInputSuccess();
      desactiveInputError();
    }, 2800);
  });
}

if (changeMode) {
}
