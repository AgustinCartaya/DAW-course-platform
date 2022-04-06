const alert = document.querySelector(".alert");
const form = document.getElementById("form");
const allInputTags = document.querySelectorAll("input");
const fileInputTag = document.getElementById("image__input");
const thumbnail = document.querySelector(".image__avatar");

const messages = [
  {
    type: "success",
    message: "Send Successfully",
    icon: "bx bx-check",
  },
  {
    type: "error",
    message: "Fill all the inputs",
    icon: "bx bx-error",
  },
  {
    type: "error",
    message: "Invalid password",
    icon: "bx bx-error",
  },
  {
    type: "error",
    message: "Invalid email",
    icon: "bx bx-error",
  },
  {
    type: "error",
    message: "Password are not similar",
    icon: "bx bx-error",
  },
];

const allInputTagValues = () => {
  const values = [];
  for (let i = 0; i < allInputTags.length; i++) {
    values.push(allInputTags[i].value);
  }
  console.log(values);
  return values;
};

export {
  alert,
  allInputTags,
  fileInputTag,
  thumbnail,
  allInputTagValues,
  form,
  messages,
};
