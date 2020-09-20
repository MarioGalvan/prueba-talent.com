<?php

class RegisterController {

    public function  registerUser($username,$phone,$email,$password){
        $data = file_get_contents('../database/users.json');
        $data = json_decode($data,true);
        $msj = "";

        $addUser = array(
            "id" => rand(1000000, 2000000),
            'username' => $username,
            'phone' => $phone,
            'email' => $email,
            'password' => $password,

        );
        $data[] = $addUser;


        if(file_put_contents('../database/users.json',  json_encode($data, JSON_PRETTY_PRINT))){
            echo "01";
        }else{
            echo "02";
        }


    }
}