<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<?php session_start();?>
<?php include "includes/formfunctions.php";?>
<?php include "includes/dbconnection.php";?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["fname"])) {
  $_SESSION['error'] = "First Name is required";
  header("Location:signup.php");
  die();
} else {
  $fname = test_input($_POST["fname"]);
}
if(empty($_POST["lname"])) {
    $_SESSION['error'] = "Last Name is required";
    header("Location:signup.php");
    die();
  } else {
    $lname = test_input($_POST["lname"]);
  }


if(empty($_POST["email"])) {
  $_SESSION['error'] = "Email is required";
  header("Location:signup.php");
  die();
} else {
  $email = test_input($_POST["email"]);
}

if(empty($_POST["phone"])) {
    $_SESSION['error'] = "phone number is required";
    header("Location:signup.php");
    die();
  } else {
    $phone = test_input($_POST["phone"]);
  }
  
if(empty($_POST["password"])) {
  $_SESSION['error'] = "Password is required";
  header("Location:signup.php");
  die();
} else {
  $password = test_input($_POST["password"]);
}

if(empty($_POST["cpassword"])) {
  $_SESSION['error'] = "Password needs to be confirmed";
  header("Location:signup.php");
  die();
} else {
  $confirm_password = test_input($_POST["cpassword"]);
} 

}

if($_POST["cpassword"] == $_POST["password"]){
$password = $confirm_password;
} else {
$_SESSION['error'] = " Password doesnt match ";
header("Location:signup.php");
die();
} 



input_length($fname);
input_length($lname);
check_for_number_in_string($fname);
check_for_number_in_string($lname);
validity_of_mail();

//password encryption

$password = password_hash($password,PASSWORD_DEFAULT);

// check if user exist
$sql= " SELECT * FROM traders WHERE email = '$email' ";
if($result = mysqli_query($conn,$sql)){
if (mysqli_num_rows($result)>0){
    $_SESSION['error'] = " This Email has been used before ";
    header("Location:signup.php");
    die();
  }       
}
// insert into db
$insert = " INSERT INTO traders(email,fname,lname,phone,password )VALUES ('$email','$fname','$lname',$phone,'$password') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Registration Successful";
header("Location:login.php");
}else{
echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
}