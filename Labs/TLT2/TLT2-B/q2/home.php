<?php
/*
    Name: WONG Qian Yu

    Email: qianyu.wong.2022
*/
require_once 'include/common.php'; # NEED TO FUCKING START SESSION FUCK

if ($_SESSION["uname"] == null) {
    header("Location: login-view.html");
    exit;
}

?>

<html>
    <body>
        <h1>highly sensitive data. Must be protected</h1>
    </body>
</html>
