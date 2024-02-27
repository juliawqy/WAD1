<?php

    $income = $_GET["income"];
    if ($income <= 20000) {
        $pay = 0;
    }
    elseif ($income <= 30000) {
        $pay = 0.02*($income - 20000);
    }
    elseif ($income <= 40000) {
        $pay = 0.035*($income - 30000) + 200;
    }
    elseif ($income <= 80000) {
        $pay = 0.07*($income - 40000) + 550;
    }
    elseif ($income <= 120000) {
        $pay = 0.115*($income - 80000) + 3350;
    }
    elseif ($income <= 160000) {
        $pay = 0.15*($income - 120000) + 7950;
    }
    elseif ($income <= 200000) {
        $pay = 0.18*($income - 160000) + 13950;
    }
    else {
        $pay = 0.2*($income - 200000) + 21150;
    }

    echo "Input personal income: $income <br>";
    echo "Tax payable: $$pay"

?>