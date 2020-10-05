<?php
function error_alert()
{
    if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
        echo "<h5 class='text-danger alert alert-danger'>" . $_SESSION['error'] . "</h5>";
    	unset($_SESSION['error']);
    }
}

function success_alert()
{
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
        echo "<h5 class='text-success alert alert-success'>" . $_SESSION['message'] . "</h5>";
    	unset($_SESSION['message']);
    }
}
