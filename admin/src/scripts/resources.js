$(document).ready(function () {
  addResourceCardsAction();
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

// function addResourceCardsAction() {
//   const cardsContainer = $("#resourcesCardsContainer");
//   for (let i = 0; i < cardsContainer.children().length; i++) {
//     console.log(cardsContainer.children()[i]);
//   }
//   // console.log(cardsContainer.children[0]);

//   // cardsContainer.addEventListener("click", (e) => {
//   //   console.log(e.target);
//   // });
// }

function addResourceCardsAction() {
  let name = $("resourceName");
  let url = $("resourceUrl");
  let type = $("resourceType");
  const cardsContainer = document.getElementById("resourcesCardsContainer");
  $(".btttt").click((e) => {
    console.log(e);
    // event.target.firstChild.children[1];
    console.log(e.target.querySelector("p"));
    // console.log(e.target.firstChild.children[1]);
    // console.log(e.tagret.querySelector("p"));
  });
}

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
                    <button type="click">
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
  addResourceCardsAction();
}
