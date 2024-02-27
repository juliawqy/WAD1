<?php
    
    // Complete the following function 
    // Check the conversion table on the slides
    function convert_to_grade($score){
        if (80 <= $score){
            return "A";
        }
        elseif (70 <= $score) {
            return "B";
        }
        elseif (60 <= $score) {
            return "C";
        }
        elseif (50 <= $score) {
            return "D";
        }
        else {
            return "F";
        }
    }

?>
<!DOCTYPE html>
<html>
<body>
    <?php
        // In real-life, the following will be retrieved from a form
        $input_score = 80;

        echo ("Score: $input_score");
        echo ("<br/>");
        echo ("Grade: " . convert_to_grade($input_score)); //call function first, so if function is echo not return, will get AGrade:
    ?>
</body>
</html>
