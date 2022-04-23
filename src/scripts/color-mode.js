$(document).ready(function () {
  const form = document.getElementById("formColorMode");
  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    var cssId = "myCss";
    switch (e.submitter.name) {
      case "light-mode":
        var mode = document.querySelector('link[href*="darck-mode.css"]');
        mode.parentNode.removeChild(mode);

        var head = document.getElementsByTagName("head")[0];
        var link = document.createElement("link");
        link.id = cssId;
        link.rel = "stylesheet";
        link.type = "text/css";
        link.href = "/DAW-project/src/styles/light-mode.css";
        link.media = "all";
        head.appendChild(link);
        break;

      case "darck-mode":
        var mode = document.querySelector('link[href*="light-mode.css"]');
        mode.parentNode.removeChild(mode);

        var head = document.getElementsByTagName("head")[0];
        var link = document.createElement("link");
        link.id = cssId;
        link.rel = "stylesheet";
        link.type = "text/css";
        link.href = "/DAW-project/src/styles/darck-mode.css";
        link.media = "all";
        head.appendChild(link);
        break;
    }
  });
});
