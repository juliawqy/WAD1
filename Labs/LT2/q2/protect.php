<?php
    /*
        Name: WONG Qian Yu
        Email: qianyu.wong.2022
    */

    ### ADD YOUR CODE HERE

    require_once "common.php";

    if (!isset($_SESSION['mobileNo'])) {
        header("Location: login.php");
        exit;
    }
    
?>
