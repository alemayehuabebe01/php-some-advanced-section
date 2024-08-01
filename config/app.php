<?php 
session_start();

 define("DB_HOST","localhost");
 define("DB_USERNAME","root");
 define("DB_PASSWORD","");
 define("DB_NAME","oop_php_feature");
 define("SITE_URL","http://localhost/php-advanced/");


 include_once("DatabaseConnection.php");

  $db = new DatabaseConnection();
  $db_conn = $db->getConnection();


  function base_url($slug){
      echo SITE_URL.$slug;
  }

  function ValidateInput($db_conn,$input){

    return mysqli_real_escape_string($db_conn, $input);
  }

  function redirect($message,$url){
    $redirectTo = SITE_URL.$url;
    $_SESSION['message'] = $message;
    header("Location: $redirectTo");
    exit(0);
  }

?>