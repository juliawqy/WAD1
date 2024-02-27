<?php

    $prev_balance = $_GET["prev_balance"];
    $paid_amt = $_GET["paid_amount"];
    $day_paid = $_GET["day_payment_made"];
    $int_rate = $_GET["interest_rate"];

    $total_prev = $prev_balance*31;
    $new_charge = $paid_amt*(31-$day_paid);
    $bfr_int = ($total_prev-$new_charge)/31;
    $aft_int = $bfr_int*($int_rate/100);

    echo "Previous balance is $$prev_balance <br>
    Payment of $$paid_amt was made on day $day_paid of the billing cycle <br>
    Interest on outstanding amount is $$aft_int
    ";

?>