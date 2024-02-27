<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

 # == Part A : ENTER CODE HERE == 

$empID = $_POST['empId'];
$password = $_POST['password'];
$dao = new EmployeeDAO();
$status = $dao->authenticate($empID, $password);


if (!isset($_SESSION['countUnsuccessful'])) {
    $_SESSION['countUnsuccessful'] = 0;
}

if (!isset($status)) {
    $_SESSION['countUnsuccessful']++;
}
else {
    $_SESSION['empId'] = $empID;
    $_SESSION['role'] = $status;
    unset($_SESSION['countUnsuccessful']);
    header("Location: viewDetails.php");
    exit;
}




 
?>

<html>
    <body>
<?php
    echo "<h1>Number of unsuccessful consecutive logins : {$_SESSION['countUnsuccessful']} </h1>";
    echo "<a href='login-view.html'>Back to Login";
?>
    </body>
</html>
