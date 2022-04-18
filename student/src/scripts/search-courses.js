$(document).ready(function () {
  addResourceCardsAction();
});

function addResourceCardsAction() {
  const cardsContainer = document.getElementById("coursePreviewCardsContainer");
  cardsContainer.addEventListener("click", (e) => {
    if (e.target.tagName === "IMG" || e.target.tagName === "P") {
      const node = e.target.parentElement;
      const obj = {
        title: node.querySelector("p").textContent,
        type: node.querySelector("span").textContent,
        id: node.querySelector("#courseId").value,
        description: node.querySelector("#courseDescription").value,
        level: node.querySelector("#courseLevel").value,
        thumbnail: node.querySelector("#courseThumbanil").src,
      };

      // setting values
      document.getElementById("coursePreviewThumbnail").src = obj.thumbnail;
      document.getElementById("coursePreviewTitle").textContent = obj.title;
      document.getElementById("coursePreviewType").textContent = obj.type;
      document.getElementById("coursePreviewLevel").textContent = obj.level;
      document.getElementById("coursePreviewDescription").textContent =
        obj.description;
      document.getElementById("coursePreviewId").value = obj.id;

      btnDeleteRegister = document.getElementById("btnRegister");
      btnDeleteRegister.disabled = false;
      btnDeleteRegister.classList.remove("btn__disabled");
    }
  });
}
