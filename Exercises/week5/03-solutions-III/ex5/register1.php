<!DOCTYPE html>
<html>
    <head><title>Registration</title></head>
    <body>
        <?php
            # Page loads for the first time
            if (!isset($_GET["fullname"])){
                echo "  <form>
                                Enter your name:
                                <input type='text' name='fullname'/>
                                <input type='checkbox' name='agree'/> 
                                Agree to T & C
                                <input type='submit' value='Register'/>
                        </form>";
            }
            # Success case
            else {
                $username = $_GET["fullname"] ;
                echo "Hi $username. Welcome to IS113!<br/>";
            }
        ?>
    </body>
</html>
