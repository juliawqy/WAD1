<?php

/*
    Name: WONG Qian Yu

    Email: qianyu.wong.2022
*/

require_once 'include/common.php';

// an array of error messages (if any)
$errors = [];

// Get username and password from FORM submission
$username = $_POST['username'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

// Code here
$dao = new AccountDAO();
$userObj = $dao->retrieve($username);

if (!$username) {
  $errors["userEmp"] = "Username field is empty"; 
}
if (!$current_password) {
  $errors["currPwEmp"] = "Current password field is empty";
}
if (!$new_password[0]) {
  $errors["newPwEmp"] = "New password field is empty";
}
if (!$new_password[1]) {
  $errors["verPwEmp"] = "Verify new password field is empty";
}
if (!$dao->authenticate($username,$current_password)) {
  $errors["loginErr"] = "wrong username/password";
}
if ($new_password[0] !== $new_password[1]) {
  $errors["pwMismatch"] = "Your new passwords do not match";
}

$_SESSION['my-errors'] = $errors;
if ($_SESSION['my-errors']) {
  header("Location: reset-view.php");
  exit;
}

$id = $userObj->getId();
$hashed = password_hash($new_password[0], PASSWORD_DEFAULT);

$status = $dao->reset_password($id, $hashed);
if (!$status) {
  $errors["unsuccessful"] = "i";
}
$_SESSION['my-errors'] = $errors;
if ($_SESSION['my-errors']) {
  header("Location: reset-view.php");
  exit;
} 

?>
<html>
<head>
  <title>Reset</title>
</head>
<body>
Success!
</body>
</html>
