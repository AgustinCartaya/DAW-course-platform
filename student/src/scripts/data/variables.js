const btnSubmit = document.getElementById("submit");
const popup = document.querySelector(".popup");
const inputs = document.querySelectorAll("input");
const inputFile = document.getElementById("studentImage");
const avatar = document.querySelector(".image__avatar");
const genders = document.getElementById("studentGender");
// const changeMode = document.getElementById("changeMode");
/*Input values*/
const inputValues = () => {
  const values = [];
  for (let i = 0; i < inputs.length; i++) {
    values.push(inputs[i].value);
  }
  return values;
};

export {
  btnSubmit,
  popup,
  inputs,
  inputValues,
  inputFile,
  avatar,
  genders,
  //changeMode
};
