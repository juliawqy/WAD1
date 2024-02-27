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
    $users = $userDAO->getUsers();

    echo "<h2>Users and Activities</h2>";
    echo "<table border='1'>";

    ### Add code here or elsewhere in this file

    echo "<tr>
              <th> UserID </th>
              <th> Gender </th>
              <th> Activity </th>
              <th> Day </th>
              <th> Time </th>
              <th> Fee(\$) </th>
          </tr>";

    $fUsersObjYogaArr = [];
    foreach ($users as $userObj) {
        if ($userObj->getGender() == "F" && $userObj->getActivity()->getType() == "Yoga") {
            $fUsersObjYogaArr[] = $userObj;
        }
    }

    foreach ($fUsersObjYogaArr as $fObj) {
        echo "<tr>
                  <td> {$fObj->getUserId()} </td>
                  <td> {$fObj->getGender()} </td>
                  <td> {$fObj->getActivity()->getType()} </td>
                  <td> {$fObj->getActivity()->getDay()} </td>
                  <td> {$fObj->getActivity()->getTime()} </td>
                  <td> {$fObj->getActivity()->getFee()} </td>";
    }  

    
    echo "</table>";

    ?>

</body>

</html>