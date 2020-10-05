<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php

$id = $_SESSION['logged'];

//collect data from form on profile.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
      $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
      $email = test_input($_POST["email"]);
      $phone = test_input($_POST["phone"]);
   
  }
  
  
  
  
  $sql = " UPDATE traders SET fname = '$fname',lname = '$lname',email = '$email',phone = '$phone' WHERE user_id = '$id' ";
      if($result = mysqli_query($conn,$sql)){
        //extract data from user row to reset session        
            $_SESSION['user_name'] = $fname ." ".$lname;
            $_SESSION['email'] = $email;
            $_SESSION['fname'] = $fname; 
            $_SESSION['lname'] = $lname;
            $_SESSION['phone'] = $phone;
            $_SESSION['message'] = " Profile successfully updated";
            header("Location:../index.php");
            die();

        }else{
                
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        
        }


       