<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
?>
<?php include "includes/dbconnection.php";?>
<?php session_start();?>
<?php

date_default_timezone_set('Africa/Lagos');
$date = date('Y/m/d', time());

$id= $_SESSION['logged'];
$email= $_SESSION['email'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];

if(isset($_GET['plan'])){
    $plan = $_GET['plan'];
    $_SESSION['plan']=$plan;
}else{
    $plan = $_SESSION['plan'];   
}

$payment_code= md5(uniqid($id, true));
echo  $payment_code;

if ($plan == "student"){
    $principal = "300";
    $duration = "1 week";
    $start_date = $date;
    $expected_earning="500";
   
}
if ($plan == "starter"){
    $principal = "500";
    $duration = "1 week";
    $start_date = $date;
    $expected_earning="1500";
   
}
if ($plan == "classic"){
    $principal = "1500";
    $duration = "1 week";
    $start_date = $date;
    $expected_earning="3500";
   
}


// insert values of plan into DB
$insert = " INSERT INTO Trades(principal,duration,start_date,end_date,payment_code,user_id,plan,expected_earning)VALUES ('$principal','$duration','$start_date',DATE_ADD('$start_date', INTERVAL 7 DAY),'$payment_code','$id','$plan','$expected_earning') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Registration Successful";
// sendVerificationEmail($email,$token);
$_SESSION['message']="Paid successful check mail for details";
header("Location:index.php");
}else{
echo "ERROR: Could not able to execute $insert. ".mysqli_error($conn); 
}
?>
