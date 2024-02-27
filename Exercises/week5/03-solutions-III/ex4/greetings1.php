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
            if(!isset($_GET["language"])){
                echo "<form>";
                echo "<input type='radio'
                            name='language' 
                            value='E' checked/> English ";
                echo "<input type='radio' 
                            name='language' 
                            value='G'/> German ";
                echo "<input type='submit' value='Greeting'/>";
                echo "</form>";
            }
            else{
                $language = $_GET["language"];
                echo $language_map[$language];
            }
        ?>
        </form>
    </body>
</html>