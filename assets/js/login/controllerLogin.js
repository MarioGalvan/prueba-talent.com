import {MSJERROR,MSJOK} from "../hooks.js";



$( document ).ready(function() {
   $("#btnlogin").click((e)=>{
       e.preventDefault();
       let username = $("#username").val();
       let password = $("#password").val();
       let route = "ajax/ajaxLogin.php";
       ajaxcontroller(username,password,route);

   })
});


const ajaxcontroller =(username,password,route) =>{
$.ajax(({
    url: route,
    type: "POST",
    data:{username,password},

    success: (data)=>{
        console.log(data);
        data=="01" ? MSJOK(data,'comments.php'): MSJERROR(data);
    }
}))
}