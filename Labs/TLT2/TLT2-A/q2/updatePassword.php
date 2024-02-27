<?php
/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part C : ENTER CODE HERE == 

$empId = $_SESSION['empId'];
$dao = new EmployeeDAO();
$employee = $dao->getEmployee($empId);
$newPass = generateRandomPassword();

if (!$empId) {
    header("Location: login-view.html");
    exit;
}

echo "Employee ID: $empId <br>
      Name: {$employee->getName()} <br>
      Current Password: {$employee->getPassword()} <br>
      <form action='process.php' method='GET'>
      New Password: <input type='text' name='newpw' value='$newPass'> <br>
      <input type='submit' name='update' value='Update'>
      <input type='hidden' name='empId' value=$empId>
      </form>";


function generateRandomPassword(){
    # == Part C : ENTER CODE HERE == 

    $check_str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $exit = False;

    while ($exit == False) {
        $num_check = False;
        $small_check = False;
        $caps_check = False;
        $return_str = "";

        for ($i=0;$i<8;$i++) {
            $index = rand(0,strlen($check_str)-1);
            $return_str .= $check_str[$index];
            if ($index < 10) {
                $num_check = True;
            }
            elseif ($index < 36) {
                $small_check = True;
            }    
            else {
                $caps_check = True;
            }
        }
        $exit = $num_check&&$small_check&&$caps_check;
    }

    
    return $return_str;

}
?>