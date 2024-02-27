<?php
/*
Name: WONG Qian Yu
Email: qianyu.wong.2022
*/

require_once "common.php";

?>

<!DOCTYPE html>
<html>

<body>

<?php

    $userDAO = new UserDAO();
    $users = $userDAO->getUsers(); #arr of userobj

    ### Add code here or elsewhere in this file

    $totalP = 0;
    foreach ($users as $userObj) {
        $activityObj = $userObj->getActivity(); 
        $actP = $activityObj->getFee();
        $totalP += $actP;
    }

    $totalP = number_format($totalP*(1+ACTIVITY::GST), 2);

    echo "<h4> The total course fees (including GST) collected is \$$totalP</h4>";

    

?>

</body>
</html>
