const regexForEmail = /[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+/;
const validEmail = (email) => {
  const result = !regexForEmail.test(email);
  return result;
};

export default validEmail;
