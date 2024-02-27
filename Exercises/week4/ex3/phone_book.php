<?php
    $phone_book = array(
                     "Bob" => "+65-9828349",
                     "Andy" => "+62-9382383"
                  ); 
?>
<html>
    <body>
        <?php
            // Enter code here
            // See the slides for the expected behaviors
            // Make use of $phone_book associative array initialized above

            $search = $_GET["person"];
            if (array_key_exists($search, $phone_book)) {
                echo "$search's phone number is $phone_book[$search]";
            }
            else {
                echo "$search is not in the phone book";
            }

            ###################
        ?>
    </body>
</html>
