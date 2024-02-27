<?php
    
    // Complete the following function 
    // Check the expected output given on the slides
    function print_triangle($height){
        $count = 0;
        while ($count != $height){
            echo str_repeat("*",$count+1);
            echo "<br>";
            $count++;
        }
    }

?>
<!DOCTYPE html>
<html>
<body>
    <?php
        // In real-life, the following will be retrieved from a form
        $height = 6; // height of the triangle
        
        echo "Height: $height <br/>";

        print_triangle($height);

    ?>
</body>
</html>