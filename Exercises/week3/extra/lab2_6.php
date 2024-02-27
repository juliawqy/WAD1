<?php

    if (isset($_GET["amount"])) {
        $amount = 100*($_GET["amount"]);
        $amountd = $_GET["amount"];
        echo "Entered amount: $amountd <br>";
        $oned = 0;
        $fifty = 0;
        $twenty = 0;
        $ten = 0;
        $five = 0;
        $one = 0;
        if (intdiv($amount,100) !== 0) {
            $oned += intdiv($amount,100);
            $amount = $amount%100;
            echo "Number of 1$: $oned <br>";
        }
        if (intdiv($amount,50) !== 0) {
            $fifty += intdiv($amount,50);
            $amount = $amount%50;
            echo "Number of 50c: $fifty <br>";
        }
        if (intdiv($amount,20) !== 0) {
            $twenty += intdiv($amount,20);
            $amount = $amount%20;
            echo "Number of 20c: $twenty <br>";
        }
        if (intdiv($amount,10) !== 0) {
            $ten += intdiv($amount,10);
            $amount = $amount%10;
            echo "Number of 10c: $ten <br>";
        }
        if (intdiv($amount,5) !== 0) {
            $five += intdiv($amount,5);
            $amount = $amount%5;
            echo "Number of 5c: $five <br>";
        }
        if (intdiv($amount,1) !== 0) {
            $one += intdiv($amount,1);
            $amount -= intdiv($amount,1);
            echo "Number of 1c: $one <br>";
        }
    }

?>