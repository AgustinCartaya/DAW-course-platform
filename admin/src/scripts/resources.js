$(document).ready(function () {
  const form = document.getElementById("formResources");
<<<<<<< HEAD
  const btnContainer = document.querySelector(".btn__container");
  console.log(btnContainer);
=======
>>>>>>> 0ef7dd36a1ec3815a74ef852b8c7e949c57f6722

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    // console.log(e.submitter.name);

<<<<<<< HEAD
    switch (e.target.classList[1]) {
      case "btn__cancel ":
        formData.append("action", "cancelResource");
        break;
      default:
=======
    switch (e.submitter.name) {
      case "addResource":
        form.reset();
>>>>>>> 0ef7dd36a1ec3815a74ef852b8c7e949c57f6722
        formData.append("action", "addResource");

        fetch("../AJAX/AJAX-resources.php", {
          method: "post",
          body: formData,
        })
          .then(function (response) {
            return response.text();
          })
          .then(function (text) {
<<<<<<< HEAD
            console.log(text);
=======
            refreshResources(text);
>>>>>>> 0ef7dd36a1ec3815a74ef852b8c7e949c57f6722
          })
          .catch(function (error) {
            console.error(error);
          });
<<<<<<< HEAD
=======

        break;

      case "cancelResource":
        form.reset();
>>>>>>> 0ef7dd36a1ec3815a74ef852b8c7e949c57f6722
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
