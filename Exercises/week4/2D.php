<?php

    $str = "123abcdABC";
    $lowercase_count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $elem = $str[$i];
        if (ctype_lower($elem)) {
            $lowercase_count++;
        }
    }
    $digit_count = 0;
    for ($j = 0; $j < strlen($str); $j++){
        $ch = $str[$j];
        if (ctype_digit($ch)) {
            $digit_count++;
        }
    }

    echo "There are $lowercase_count lowercase letters in '$str' <br>";
    echo "There are $digit_count digits in '$str'";

?>