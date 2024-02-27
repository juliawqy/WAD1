<?php

/*
    Name: WONG Qian Yu

    Email: qianyu.wong.2022
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part B : ENTER CODE HERE == 

$dao = new EmployeeDAO();
$allEmp = $dao->getAllEmployees();

if ($_SESSION["role"] == "User") {

    $empId = $_SESSION['empId'];
    $employee = $dao->getEmployee($empId);
    $spouse = $dao->getSpouse($empId);
    echo "<table border='1'>
            <tr>
                <th> Employee ID </th>
                <th> Name </th>
                <th> Spouse </th>
                <th> Child </th>
            </tr>
            <tr>
                <td> $empId </td>
                <td> {$employee->getName()} </td>";
    if (isset($spouse)) {
        echo "<td> {$spouse->getSpouseName()} </td>
              <td>";
    }
    else {
        echo "<td> None </td>
              <td>";
    }
    
    $children = $dao->getChildren($empId);

    if (!empty($children)) {
        foreach ($children as $childName => $childAge) {
            echo "$childName: $childAge <br>";
        }
    }
    else {
        echo "None";
    }

    echo "</td> </table> You are logged out";
}

elseif ($_SESSION["role"] == "Admin") {

    echo "<table border='1'>
            <tr>
                <th> Employee ID </th>
                <th> Name </th>
                <th> Spouse </th>
                <th> Child </th>
                <th> Password </th>
            </tr>";

    foreach ($allEmp as $empObj) {

        $empId = $empObj->getEmpId();

        echo "<tr>
                  <td> $empId </td>
                  <td> {$empObj->getName()} </td>";
        
        $spouse = $dao->getSpouse($empId);
        if (isset($spouse)) {
        echo "<td> {$spouse->getSpouseName()} </td>
                <td>";
        }
        else {
            echo "<td> None </td>
                    <td>";
        }
        
        $children = $dao->getChildren($empId);
    
        if (!empty($children)) {
            foreach ($children as $childName => $childAge) {
                echo "$childName: $childAge <br>";
            }
        }
        else {
            echo "None";
        }

        echo "</td>
              <td> <a href=\"updatePassword?empId=$empId\"> {$empObj->getPassword()} </a> </td>";


    }

    echo "</table>";

}

else {
    header("Location: login-view.html");
    exit;
}


?>
