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
  
    if(empty($_POST["password"])) {
      $_SESSION['error'] = " Password is required";
      header("Location:../change.php");
      die();
    } else {
      $current_password = test_input($_POST["password"]);
    }
  
    if(empty($_POST["npassword"])) {
      $_SESSION['error'] = " Type in a new password";
      header("Location:../change.php");
      die();
    } else {
      $new_password = test_input($_POST["npassword"]);
    }
  
    if(empty($_POST["rnpassword"])) {
      $_SESSION['error'] = " New Password needs to be rentered";
      header("Location:../change.php");
      die();
    } else {
      $rn_password = test_input($_POST["rnpassword"]);
    }
  
  
   
  }
  
  if($_POST["npassword"] == $_POST["rnpassword"]){
      $new_password = $rn_password;
    } else {
      $_SESSION['error'] = " Password doesnt match ";
      header("Location:../change.php");
      die();
  }
  
  

  $new_password = password_hash($new_password,PASSWORD_DEFAULT);

  $sql= " SELECT password FROM traders WHERE user_id = '$id' ";
      if($result = mysqli_query($conn,$sql)){
         // check for password matching
              if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $db_password = $row["password"];
  
                    if(password_verify($current_password, $db_password)){
                        $sql = "UPDATE traders SET password = '$new_password' WHERE user_id = '$id' ";
                        $update = mysqli_query($conn,$sql);
                        $_SESSION['message'] = " Password successfully changed";
                        header("Location:../logout.php");
                        die();
                    }else{
                        $_SESSION['error'] = " Password does not match";
                        header("Location:../change.php");
                        die();
                    }
        
              }   
        }