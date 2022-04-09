$(document).ready(function(){
  const form= document.getElementById("formResources");
  const btnContainer = document.querySelector(".btn__container");
  console.log(btnContainer);

  
  form.addEventListener("submit", async (e)=>{
    e.preventDefault();
    const formData = new FormData(form);
    btnContainer.addEventListener("click", (e)=>{
      console.log(e.target.classList[1])
      switch (e.target.classList[1]) {
        case 'btn__cancel ':
            formData.append("action", "cancelResource");
          break;
        case 'btn__delete':
            formData.append("action", "deleteResource");
          break;         
        default:
            formData.append("action", "addResource");
          break;
      }
    });

    fetch('../AJAX/AJAX-resources.php', {
          method: 'post',
          body: formData
    }).then(function (response) {
      return response.text()
    }).then(function (text) {
      console.log(text)
    }).catch(function (error) {
      console.error(error)
    })

  } ); 

});
