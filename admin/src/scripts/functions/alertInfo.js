const popup = document.querySelector(".popup");

const alertInfo = (type, message, icon) => {
  return (popup.innerHTML = `
  <p class="popup__content ${type}">
    <span><i class='${icon + type}'></i></span>
   ${message}
  </p>`);
};

export default alertInfo;
