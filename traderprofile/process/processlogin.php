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
    if(empty($_POST["email"])) {
      $_SESSION['error'] = "Email is required";
      header("Location:../login.php");
      die();
    } else {
      $email =  test_input($_POST["email"]);
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
$sql= " SELECT * FROM traders WHERE email = '$email' ";
    if($result = mysqli_query($conn,$sql)){
        if (mysqli_num_rows($result)<1){
            $_SESSION['error'] = " You have to signup first";
            header("Location:../login.php");
            die();
          }       
      }



// check for password matching
if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $db_password = $row["password"];
        
        $_SESSION['logged'] = $row["user_id"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['fname'] = $row["fname"]; 
        $_SESSION['lname'] = $row["lname"];
        $_SESSION['user_name'] = $row["fname"] ." ".$row["lname"];
        $_SESSION['phone'] = $row["phone"];
        $_SESSION['status'] =  $row['status'];
        
        

    if(password_verify($password, $db_password)){
      print_r($_SESSION);
            header("Location:../index.php");
            die();
      }else{
          $_SESSION['error'] = " Wrong password or Wrong email";
          header("Location:../login.php");
          die();
      }
    
}