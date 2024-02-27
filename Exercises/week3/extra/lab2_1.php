<!DOCTYPE html>
<html>
    <body>
        <form action="lab2_1.php">
            Enter monthly sales amount($): <input name="salesamt" type = "input">
            <input type="submit">
        </form>
    </body>
</html>

<?php

    $salesamt = $_GET["salesamt"];
    if ($salesamt >= 18000) {
        $comm = 18;
    }
    elseif ($salesamt >= 15000) {
        $comm = 15;
    }
    elseif ($salesamt >= 10000) {
        $comm = 10;
    }
    else {
        $comm = 5;
    }
    $pay = $salesamt*($comm/100) + 2000;

    echo "<br> Entered monthly sales amount($):$salesamt <br>
    Commission rate for sale of sales amount $salesamt is $comm% <br>
    The monthly pay for the salesperson is $$pay
    ";

?>