<?php
    session_start();
    if(isset($_SESSION['user_uname']))
    {
        unset($_SESSION['user_uname']);
    }
    $alert= "<script>alert('You will be logging out soon.')</script>";
    echo $alert;
    header("location:masterHome.php");
    die;
?>