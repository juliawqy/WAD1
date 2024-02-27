<?php
    $num1 = rand(1,10);
    $num2 = rand(1,10);
    $num3 = rand(1,10);
  
    echo "*****************<br/>";
    echo "** $num1 ** $num2 ** $num3 **<br/>";
    echo "*****************<br/>";
 
    # write your code here
    if ($num1 == $num2 and $num2 == $num3) {
        echo "** Jackpot!! **";
    }
    elseif ($num1 == $num2 or $num1 == $num3 or $num2 == $num3) {
        echo "** 2 of a kind **";
    }
    else {
        echo "** Try again! **";
    }


?>
