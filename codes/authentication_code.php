<?php 

include_once("config/app.php");
include_once("controllers/RegisterController.php");

if(isset($_POST['register_btn'])){

    $fname = ValidateInput($db_conn,$_POST['fname']);
    $fname = ValidateInput($db_conn,$_POST['lname']);
    $email = ValidateInput($db_conn,$_POST['email']);
    $password = ValidateInput($db_conn,$_POST['password']);
    $Confirm_password = ValidateInput($db_conn,$_POST['confirm_password']);


    $register = new RegisterController();
    $confirm_password_result = $register->confirmPassword($password,$Confirm_password);
    if($confirm_password_result){
       
    }else{
        redirect('The Password You Interd is not mach','register.php');
    }
    $register->register($fname,$fname, $email,$password);
    





    
    
}