<?php
require_once '../controllers/RegisterController.php';

$register = new RegisterController();
$username = $_POST["username"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];

//Valid with PCRE PHP
$regexUsername = '/^(?=(?:.*[a-zA-Z]){4})(?=(?:.*[0-9]){2})\w*$/m';
$regexEmail =  '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
$regexPhone = '/^([0-9]){10}/ix';
$regexPassword = '/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,50})/ix';


//VALID FIELDS EMPTYS
if(empty($username) || empty($email) || empty($phone) || empty($password)){

    echo "please fill all fields";

}else{
        $errors = array();

        if(!preg_match_all($regexUsername, $username, $matches, PREG_SET_ORDER, 0)){
        array_push($errors,"the username field must have at least 4 letters and 2 numbers, and it must not contain
        Special characters");
        }

       if(!preg_match_all($regexEmail, $email, $matches,PREG_SET_ORDER, 0)){
           array_push($errors,"the field email  not is valid email");
       }

    if(!preg_match_all($regexPhone, $phone, $matches,PREG_SET_ORDER, 0)){
        array_push($errors,"the field phone must contain only numbers and must be at least 10 numbers");
    }

    if(!preg_match_all($regexPassword, $password, $matches,PREG_SET_ORDER, 0)){
        array_push($errors,"the field password it should be at least 6 characters long and contain a “-” and an uppercase letter.");
    }


//      for ($i=0; $i<count($errors); $i++){
//          echo $errors[$i];
//      }

    foreach ($errors as $error){
        printf($error);
    }


      if(count($errors)==0){
         return $register->registerUser($username,$phone,$email,$password);
      }


}





