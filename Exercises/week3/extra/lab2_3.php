<!DOCTYPE html>
<html>
    <body> 
        <form action="lab2_3.php">
            Enter a positive integer: <input name="num" type="number" min="1">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    
    $num = $_GET["num"];
    $sum = 0;
    $check = 1;
    while ($check < $num/2+1) {
        if ($num%$check == 0) {
            $sum += $check;
        }
        $check++;
    }
    if ($sum == $num) {
        echo "Yes, $num is a perfect number";
    }
    else {
        echo "$num is not a perfect number";
    }

?>