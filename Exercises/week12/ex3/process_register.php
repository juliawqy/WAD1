<?php
    # Autoload
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );

    # Start session
    session_start();

    # Get parameters passed from register.php
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Hash entered password
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    # Add new user
    $dao = new UserDAO();
    $status = $dao->add($username,$hashed);
    if($status){
        # Put "Registered successfully"
        # in a session variable "success"
        $_SESSION["success"] = "Registration Successful";

        # Redirect to login.php
        # Provide information of the newly registered user 
        # at the back of the URL
        header("location: login.php?username=$username");
        exit;
    }
    else{
        echo "Failed to register";
    }
?>