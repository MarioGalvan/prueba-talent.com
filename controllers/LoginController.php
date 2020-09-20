<?php

class LoginController {

    public  function  LoginUser($username,$password){
        $data = file_get_contents('../database/users.json');
        $dataAll = json_decode($data,true);
        $msj = "";
        foreach ($dataAll as $data){
            if($data["username"]==$username && $data["password"]==$password){
               $msj =  "01";
            }else{
              $msj = "02";

            }
        }

        return $msj;
    }


}

