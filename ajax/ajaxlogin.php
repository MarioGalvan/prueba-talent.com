<?php

require_once '../controllers/LoginController.php';
$login = new LoginController();
$username = $_POST["username"];
$password = $_POST["password"];
$data = $login->LoginUser($username,$password);
if($data=="01"){
   session_start();
   $_SESSION["user"] = $username;
   echo "01";
}else{
    echo "Authentication Error";
}