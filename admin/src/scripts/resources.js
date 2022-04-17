$(document).ready(function () {
  addResourceCardsAction();
  const form = document.getElementById("formResources");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    form.reset();
    switch (e.submitter.name) {
      case "addResource":
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

      case "deleteResource":
        formData.append("action", "deleteResource");
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
        changeResourceFromButtons(false);
        break;
    }
  });
});

function addResourceCardsAction() {
  const cardsContainer = document.getElementById("resourcesCardsContainer");
  cardsContainer.addEventListener("click", (e) => {
    if (e.target.tagName === "IMG" || e.target.tagName === "P") {
      const node = e.target.parentElement;
      const obj = {
        content: node.querySelector("p").textContent,
        type: node.querySelector("span").textContent,
        url: node.querySelector("input[name='resourceUrl']").value,
        id: node.querySelector("input[name='resourceId']").value,
      };

      // setting values
      const resourceName = document.getElementById("resourceName");
      const resourceType = document.getElementById("resourceType");
      const resourceId = document.getElementById("resourceId");
      const labelSrc = document.getElementById("labelSrc");

      resourceName.value = obj.content;
      // resourceUrl.value = obj.url;
      resourceType.value = obj.type;
      resourceId.value = obj.id;
      labelSrc.textContent = obj.url;
      //modify buttons
      changeResourceFromButtons(true);
    }
  });
}

function changeResourceFromButtons(ch) {
  const btnAddResource = document.getElementById("addResource");
  const btnDeleteResource = document.getElementById("deleteResource");
  const legendFormResource = document.getElementById("legendFormResource");
  const resourceId = document.getElementById("resourceId").value;
  const resourceUrl = document.querySelector("input[name='resourceUrl']");

  if (ch) {
    btnAddResource.text = "SAVE";
    btnAddResource.value = "editResource";
    btnDeleteResource.disabled = false;
    btnDeleteResource.classList.remove("btn__disabled");
    btnDeleteResource.classList.add("btn__delete");
    legendFormResource.textContent = "Edit resorce #" + resourceId;
    resourceUrl.classList.add("hide");
    resourceUrl.classList.remove("show");
  } else {
    btnAddResource.text = "ADD";
    btnAddResource.value = "addResource";
    btnDeleteResource.disabled = true;
    btnDeleteResource.classList.remove("btn__delete");
    btnDeleteResource.classList.add("btn__disabled");
    legendFormResource.textContent = "Add resorce";
    resourceUrl.classList.remove("hide");
    resourceUrl.classList.add("show");
    document.getElementById("labelSrc").textContent = "Source:";
  }
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
                    <button>
                      <img
                        src="${getResourceDefaultImage(ele.type)}"
                        alt="Image"
                        />
                        <span>${ele.type}</span>
                        <p>${ele.name}</p>
                        <input type="hidden" name="resourceUrl" value="${
                          ele.url
                        }"/>
                        <input type="hidden" name="resourceId" value="${
                          ele.id
                        }" />
                    </button>
                  </div>`;
  });
  resourcesCardsContainer.innerHTML = cards;
}
