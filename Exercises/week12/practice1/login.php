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
                # Get the value of "username" if it exists in $_GET
                $username = "";
                if (isset($_GET["username"])) {
                    $username = $_GET["username"];
                }
               
            echo "Username <input type=\"text\" name=\"username\" value=\"$username\"/>";
            ?>
            <br/>
            Password <input type="password" name="password"/>
            <br/>
            <input type="submit" value="Login"/>
        </form>

        <?php
            # Check if "success" key exists in the session
            
            if (isset($_SESSION["success"])) {
            
                # Display the success message
                echo "<br> <p style='color:green'>".$_SESSION["success"]."</p>";
                
                # Remove the key "success" from the session
                unset($_SESSION["success"]);
            }
        ?>
    </body>
</html>
