<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
?>
<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])) {
      $_SESSION['error'] = "Username is required";
      header("Location:../login.php");
      die();
    } else {
      $adminname =  test_input($_POST["name"]);
    }
    
    if(empty($_POST["password"])) {
      $_SESSION['error'] = "Password is required";
      header("Location:../login.php");
      die();
    } else {
      $password = test_input($_POST["password"]);
    }
    
  }
  

// check if user exist
$sql= " SELECT * FROM admin WHERE admin_name = '$adminname' ";
    if($result = mysqli_query($conn,$sql)){
        if (mysqli_num_rows($result)<1){
            $_SESSION['error'] = " Wrong details";
            header("Location:../login.php");
            die();
          }       
      }



// check for password matching
if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $db_password = $row["admin_password"];
        
        $_SESSION['logged'] = $row["admin_id"];
        $_SESSION['adminname'] = $row["admin_name"];
        
        

    if(password_verify($password, $db_password)){
      print_r($_SESSION);
            header("Location:../index.php");
            die();
      }else{
          $_SESSION['error'] = " Wrong login details";
          header("Location:../login.php");
          die();
      }
    
}