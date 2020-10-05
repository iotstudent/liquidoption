<?php
function error_alert()
{
    if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
        echo "<h4 class='text-white alert alert-danger'>" . $_SESSION['error'] . "</h4>";
        unset($_SESSION['error']);
    }
}

function success_alert()
{
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
        echo "<h4 class='text-white alert alert-success'>" . $_SESSION['message'] . "</h4>";
        unset($_SESSION['message']);
    }
}
