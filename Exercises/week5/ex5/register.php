<!DOCTYPE html>
<html>
    <head><title>Registration</title></head>
    <body>
        <?php
            # Complete this PHP block
            # See expected behavior on the slides

            if (!empty($_GET["agree"]) && !empty($_GET["fullname"])) {
                echo "Hi {$_GET["fullname"]}. Welcome to IS113!";
            }
            
            else {
                
                $value = "";

                if (!empty($_GET["fullname"])) {
                    $name = $_GET["fullname"];
                    $value = "value= $name";
                }

                echo "  <form>
                    Enter your name:
                    <input type='text' name='fullname' $value />
                    <input type='checkbox' name='agree'/> 
                    Agree to T & C
                    <input type='submit' value='Register'/>
                </form>";
                
                #if (empty($_GET["fullname"])) {
                #}

                if (empty($_GET["agree"]) && !isset($_GET["fullname"])) {
                    echo "Please agree to T & C";
                }

             }
            
            #############################
        ?>
    </body>
</html>
