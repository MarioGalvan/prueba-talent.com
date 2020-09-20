import {MSJERROR,MSJOK} from "../hooks.js";

$( document ).ready(function() {
    $("#btnWriteAComment").click((e)=>{
        e.preventDefault();
        let comment = $("#writeacomment").val();


        let route = "ajax/ajaxComments.php";
        ajaxcontroller(comment,route);


    })
});


const ajaxcontroller =(comment,route) =>{
    $.ajax(({
        url: route,
        type: "POST",
        data:{comment},

        success: (data)=>{

            data=="01" ? MSJOK('comment registered correctly','comments.php'): MSJERROR(data);
        }
    }))
}






///SEARCH INPUTS

$("#searchcomments").on('keyup',(e)=>{
        $.ajax({

        })

})
