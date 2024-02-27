<?php
    
    // Complete the following function 
    // Check the pass requirements given on the slides
    function can_pass($lab, $exam, $attendance){
        $overall = 0.2*$lab + 0.8*$exam;
        if ($attendance >= 8 && $overall >= 50){
            return True;
        }
        else {
            return False;
        }
    }

?>
<!DOCTYPE html>
<html>
<body>
    <?php
        // In real-life, the following will be retrieved from a form
        $lab = 90; // lab score
        $exam = 60; // exam score
        $attendance = 9; // attendance count
        
        echo "Lab score is: $lab <br/>";
        echo "Exam score is: $exam <br/>";
        echo "Attendance count is: $attendance <br/>";
        
        echo "Pass: ";
        if (can_pass($lab, $exam, $attendance)){ //if return "yes" and "no", returns boolean True so always will pass
            echo "Yes";
        }
        else {
            echo "No";
        }
    ?>
</body>
</html>
