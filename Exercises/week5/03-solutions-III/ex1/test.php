<?php
    $v = 10; 
    f1();
    echo $v;

    function f1() {
        $v = 5;
        f2();           
    }

   function f2() {
        global $v;
        $v += 5;
    }
?>
