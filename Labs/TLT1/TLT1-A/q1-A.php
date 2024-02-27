<?php
/* 
    Name:  WONG Qian Yu
    Email: qianyu.wong.2022
*/

    function is_divisible_by($num, $n) {
        if ($n == 0) {
            return "NO";
        }
        elseif ($num%$n == 0) {
            return "YES";
        }
        else {
            return "NO";
        }
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $div = $_POST["divisor"];
    $num_array = array($num1, $num2, $num3); #or [#num1, #num2, $num3]
    echo "<ul>";
    foreach ($num_array as $num) {
        $can_div = is_divisible_by($num, $div);
        echo "<li> $num is divisible by $div: $can_div </li>";
    }
    echo "</ul>"


?>
