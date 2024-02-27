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
        # Delete the following line
        ### echo "Registered successfully";

        # Put "Registered successfully"
        # in a session variable "success"
        $_SESSION["success"] = "Registered successfully";
        
        # Redirect to login.php
        # Provide information of the newly registered user 
        # at the back of the URL

        header("Location: login.php?username=$username");
        
    }
    else{
        echo "Failed to register";
    }
?>