<?php
    $a = 11;
    $b = 21;
    $c = 31;
    $d = 41;
    echo "before rotation: a = $a, b = $b, c = $c, d = $d <br>";
 
    # write your code here
    $holding = $d;
    $d = $c;
    $c = $b;
    $b = $a;
    $a = $holding; 
 
    echo "after rotation: a = $a, b = $b, c = $c, d = $d";   
?> 
