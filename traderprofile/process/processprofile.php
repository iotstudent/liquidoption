<?php session_start();?>
<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
?>

<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php

$id = $_SESSION['logged'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
      $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
      $email = test_input($_POST["email"]);
      $account = test_input($_POST["account"]);
      $phone = test_input($_POST["phone"]);
   
  }
  
  
  
  
  $sql = " UPDATE traders SET fname = '$fname',lname = '$lname',email = '$email',account_number = '$account',phone = '$phone' WHERE user_id = '$id' ";
      if($result = mysqli_query($conn,$sql)){
          
            $_SESSION['user_name'] = $fname ." ".$lname;
            $_SESSION['account'] = $account;
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


       