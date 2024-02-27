<!DOCTYPE html>
<html>
    <head><title>Registration</title></head>
    <body>
        <?php
            # Page loads for the first time
            #                  OR 
            # User did not check the agree checkbox
            if (!isset($_GET["fullname"]) || !isset($_GET["agree"])){
                echo "  <form>
                                Enter your name:
                                <input type='text' name='fullname'/>
                                <input type='checkbox' name='agree'/> 
                                Agree to T & C
                                <input type='submit' value='Register'/>
                        </form>";
                # Fullname was entered (page does not load for the 1st time)
                # It means the user did not check the agree checkbox
                if (isset($_GET["fullname"])){
                    echo "Please agree to T & C";
                }
            } 
            # Success case
            else {
                $username = $_GET["fullname"] ;
                echo "Hi $username. Welcome to IS113!<br/>";
            }
        ?>
    </body>
</html>
