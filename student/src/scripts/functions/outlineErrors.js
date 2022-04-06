import { inputs, inputValues } from "../data/variables";

const invalidInput = (value) => (value.style.outline = "1px solid #e34747");
const fillThisInputError = () => {
  const values = inputValues();
  for (let i = 0; i < values.length; i++) {
    if (values[i] === "") {
      inputs[i].style.outline = "1px solid red";
    }
  }
  return;
};

const desactiveInputError = () => {
  const values = inputValues();
  for (let i = 0; i < values.length; i++) {
    if (values[i] === "") {
      inputs[i].style.outline = "unset";
    }
  }
  return;
};

export { fillThisInputError, invalidInput, desactiveInputError };
