$(document).ready(function () {
  const form = document.getElementById("formColorMode");
  const btnSwitch = document.querySelector(".switch");

  const dark = () => {
    var cssId = "myCss";
    var mode = document.querySelector('link[href*="light-mode.css"]');
    mode.parentNode.removeChild(mode);
    var head = document.getElementsByTagName("head")[0];
    var link = document.createElement("link");
    link.id = cssId;
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = "/DAW-project/src/styles/darck-mode.css";
    link.media = "all";
    return head.appendChild(link);
  };

  const light = () => {
    var cssId = "myCss";
    var mode = document.querySelector('link[href*="darck-mode.css"]');
    mode.parentNode.removeChild(mode);

    var head = document.getElementsByTagName("head")[0];
    var link = document.createElement("link");
    link.id = cssId;
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = "/DAW-project/src/styles/light-mode.css";
    link.media = "all";
    return head.appendChild(link);
  };

  btnSwitch.addEventListener("click", (e) => {
    e.preventDefault();
    switch (e.target.getAttribute("value")) {
      case "light":
        light();
        localStorage.setItem("mode", "light");
        btnSwitch.classList.add("active");
        console.log(btnSwitch);
        break;

      case "darck":
        dark();
        btnSwitch.classList.remove("active");
        console.log(btnSwitch);
        localStorage.setItem("mode", "dark");
        break;
    }
  });

  if (localStorage.getItem("mode") === "dark") {
    dark();
    btnSwitch.classList.remove("active");
  } else if (localStorage.getItem("mode") === "light") {
    light();
    btnSwitch.classList.add("active");
  } else {
    localStorage.setItem("mode", "dark");
  }
});
