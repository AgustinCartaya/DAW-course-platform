$(document).ready(function(){
    console.log("readi");
});

$("#bt").click(function() {
    console.log("Hola");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/DAW-project/index.php", true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({
        value: {"action":"addResource" , "user":"admin", "password":"1234"}
    }));


        // var name = document.getElementById("name").value;
        // var email = document.getElementById("email").value;
        // var password = document.getElementById("password").value;
    //     $.ajax({
    //             type : "POST",  //type of method
    //             url  : "",  //your page
    //             data : {"action":"addResource" , "user":"admin", "password":"1234"},
    //             success: function(res){  
    //                                     console.log(res);//do what you want here...
    //                                     // devuelve la pagina
    //                     }
    //         });
    // console.log("Sent");
});