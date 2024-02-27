<?php
    $language_map = array ( 
                        "E" => "Good Afternoon",
                        "G" => "Guten Tag"
                    );
?>

<html>
    <body>
        <form>
        <?php
            # Complete this PHP block
            # See expected behavior on the slides

            $is_e_checked = "";
            $is_g_checked = "";

            if ($_GET["language"] == "E") {
                $is_e_checked = "checked";
            }
            else {
                $is_g_checked = "checked";
            }

            echo "<form>";
            echo "<input type='radio'
                        name='language' 
                        value='E' $is_e_checked/> English ";
            echo "<input type='radio' 
                        name='language' 
                        value='G' $is_g_checked /> German ";
            echo "<input type='submit' value='Greeting'/>";
            echo "</form>";
                    
            if (isset($_GET["language"])) {
                echo " {$language_map[$_GET["language"]]}";
            }

            #############################
        ?>
        </form>
    </body>
</html>