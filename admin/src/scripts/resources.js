$(document).ready(function () {
  const form = document.getElementById("formResources");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    // console.log(e.submitter.name);

    switch (e.submitter.name) {
      case "addResource":
        form.reset();
        formData.append("action", "addResource");

        fetch("../AJAX/AJAX-resources.php", {
          method: "post",
          body: formData,
        })
          .then(function (response) {
            return response.text();
          })
          .then(function (text) {
            refreshResources(text);
          })
          .catch(function (error) {
            console.error(error);
          });

        break;

      case "cancelResource":
        form.reset();
        break;
    }
  });
});

function getResourceDefaultImage(type) {
  switch (type.toLowerCase()) {
    case "pdf":
      return "/DAW-project/src/assets/img/pdf.png";
      break;
    case "image":
      return "/DAW-project/src/assets/img/image.png";
      break;
    case "video":
      return "/DAW-project/src/assets/img/video.png";
      break;
    default:
      return NULL;
      break;
  }
}

function refreshResources(data) {
  let resourcesCardsContainer = document.getElementById(
    "resourcesCardsContainer"
  );
  cards = "";
  data = JSON.parse(data);
  data.map((ele) => {
    console.log(ele);
    cards += `<div class='card__item'>
                    <button>
                      <img
                        src="${getResourceDefaultImage(ele.type)}"
                        alt="Image"
                        />
                        <span>${ele.type}</span>
                        <p>${ele.name}</p>
                      </button>
                  </div>`;
  });
  console.log(cards);
  resourcesCardsContainer.innerHTML = cards;
}
