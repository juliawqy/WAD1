<?php 
    # Start a session
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>Login</h1>
        <form method="post" action="process_login.php">
            <?php 
                $username = "";
                # Get the value of "username" if it exists in $_GET
                if(isset($_GET["username"])){
                    $username = $_GET["username"];
                }
            ?>   
            Username <input type="text" name="username" value="<?php echo $username;?>"/>
            <br/>
            Password <input type="password" name="password"/>
            <br/>
            <input type="submit" value="Login"/>
        </form>
        <?php
            # Check if "success" key exists in the session
            if(isset($_SESSION["success"])){
                # Display the success message
                echo "<p style='color: green'>" .
                         $_SESSION["success"] .
                      "</p>";
                # Remove the key "success" from the session
                unset($_SESSION["success"]);
            }

            # Check if "error" key exists in the session
            if(isset($_SESSION["error"])) {           
                # Display the error message
                echo "<p style='color: red'>".$_SESSION["error"]."</p>";
                # Remove the key "error" from the session
                unset($_SESSION["error"]);
            }
                
        ?>
    </body>
</html>
