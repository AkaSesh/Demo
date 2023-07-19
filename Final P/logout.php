<?php 
    //Include constants.php for SITEURL
    include('./createconn.php');
    session_start();

    //1. Destory the Session
    unset($_SESSION["user"]);
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('Refresh: 2; URL = login.php');

?>