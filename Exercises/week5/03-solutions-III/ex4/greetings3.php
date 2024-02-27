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
            $checked_english = "checked";
            $checked_german = "";

            if(isset($_GET["language"])){
                $language = $_GET["language"];
                if ($language == "G"){
                    $checked_english = "";
                    $checked_german = "checked";
                }
            }
            
            echo "<form>";
            echo "<input type='radio'
                        name='language' 
                        value='E' $checked_english/> English ";
            echo "<input type='radio' 
                        name='language' 
                        value='G' $checked_german/> German ";
            echo "<input type='submit' value='Greeting'/>";
            echo "</form>";
            
            if(isset($_GET["language"])){
                $language = $_GET["language"];
                echo $language_map[$language];
            }
        ?>
        </form>
    </body>
</html>