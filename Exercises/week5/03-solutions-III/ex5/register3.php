<!DOCTYPE html>
<html>
    <head><title>Registration</title></head>
    <body>
        <?php
            # Page loads for the first time
            #                  OR 
            # User did not check the agree checkbox
            if (!isset($_GET["fullname"]) || !isset($_GET["agree"])){
                
                $entered_name = "";
                $error_msg = "";
                
                # Fullname was entered (page does not load for the 1st time)
                # It means the user did not check the agree checkbox
                if (isset($_GET["fullname"])){
                    $entered_name = $_GET["fullname"];
                    $error_msg = "Please agree to T & C";
                }

                echo "  <form>
                                Enter your name:
                                <input type='text' name='fullname' value='$entered_name'/>
                                <input type='checkbox' name='agree'/> 
                                Agree to T & C
                                <input type='submit' value='Register'/>
                        </form>";
                
                echo $error_msg;
            } 
            # Success case
            else {
                $username = $_GET["fullname"] ;
                echo "Hi $username. Welcome to IS113!<br/>";
            }
        ?>
    </body>
</html>
