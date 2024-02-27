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

    $nums = $_GET["numbers"];
    $div = $_GET["divisor"];
    $num_array = explode(",", $nums); #$numbers = explode (',', $_GET['numbers']);
    echo "<ul>";
    foreach ($num_array as $num) {
        $can_div = is_divisible_by($num, $div);
        echo "<li> $num is divisible by $div: $can_div </li>";
    }
    echo "</ul>"

?>