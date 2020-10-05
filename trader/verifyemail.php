
<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php



if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM traders WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $query = "UPDATE traders SET status='verified' WHERE token='$token'";

        if (mysqli_query($conn, $query)) {
            $_SESSION['message'] = " You have been verified";
            header('location:login.php');
            die();
        }
    } else {
        echo "User not found!";
    }
} else {
    echo "No token provided!";
}
