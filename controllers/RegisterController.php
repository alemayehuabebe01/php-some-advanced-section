<?php 

include_once("config/app.php");
class RegisterController{

    private $db;
    public function __construct(){
        $this->db = new DatabaseConnection();
        $this->db = $this->db->getConnection();
    }

    public function register($fname,$lname,$email,$password){

        $registerQuery = "INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
        $result = $this->db->query($registerQuery);
        if($result)
        {
            return true;
        }      
        else{
            return false;
        }
    }

    public function IsUserExisted($email){
        $checkUser = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = $this->db->query($checkUser);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }

    public function confirmPassword($password,$Confirm_password){
        if($Confirm_password == $password){
            return true;
        }
        else{
            return false;
        }
    }
}