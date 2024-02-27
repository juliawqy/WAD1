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

    echo "<h2>Users</h2>";
    echo "<table border='1'>";
    
    ### Add code here or elsewhere in this file
    echo "<tr>
              <th> User ID </th>
              <th> Gender </th>
          </tr>";
    foreach ($users as $userObj) {
        echo "<tr> 
                  <td> {$userObj->getUserId()} </td>
                  <td> {$userObj->getGender()} </td>
              </tr>";
    }


    
    echo "</table>";

    ?>

</body>

</html>