<?php
    # Autoload and start session
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );
    
    # Get parameters passed from login.php
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Get user information
    $dao = new UserDAO();
    $user = $dao->retrieve($username);

    # Check if user exists 
    $success = false;
    if($user != null){
        # Get stored hashed password
        $hashed = $user->getHashedPassword();
        # Check if entered password matches stored hashed password
        $success = password_verify($password,$hashed); 
        if($success){
            echo "Successful Login";
            echo $success;
        }
    }

    # Failed login
    if (!$success){
        echo "Failed Login";
    }
?>