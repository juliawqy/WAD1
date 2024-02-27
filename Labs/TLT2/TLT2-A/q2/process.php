<?php

/*
    Name: WONG Qian Yu

    Email: qianyu.wong.2022
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part D : ENTER CODE HERE == 

$dao = new EmployeeDAO();
$empId = $_GET["empId"];
$newPass = $_GET["newpw"];
$status = $dao->updatePassword($empId, $newPass);

if (!$empId) {
    header("Location: login-view.html");
    exit;
}

if ($status) {
    echo "Password updated. You are logged out";
    unset($_SESSION["empId"]);
    unset($_SESSION["role"]);
}

?>