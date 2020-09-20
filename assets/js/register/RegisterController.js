import {MSJERROR,MSJOK} from "../hooks.js";



$( document ).ready(function() {
    $("#btnregister").click((e)=>{
        e.preventDefault();
        let username = $("#username").val();
        let password = $("#password").val();
        let email = $("#email").val();
        let phone = $("#phone").val();

        let route = "ajax/ajaxRegister.php";
        ajaxcontroller(username,phone,email,password,route);


    })
});


const ajaxcontroller =(username,phone,email,password,route) =>{
    $.ajax(({
        url: route,
        type: "POST",
        data:{username,phone,email,password},

        success: (data)=>{

            data=="01" ? MSJOK('registered correctly','index.php'): MSJERROR(data);
        }
    }))
}