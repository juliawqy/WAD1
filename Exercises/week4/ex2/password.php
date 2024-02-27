<?php 

$passwd = $_POST["password"];
echo "Entered Password: $passwd <br/>";

$valid = "NO";

// Enter code here
// See the slides for requirements of a valid password

$dig_check = FALSE;
$let_check = FALSE;

if (strlen($passwd) >= 6 && strlen($passwd) <= 20) {
    for ($i = 0; $i < strlen($passwd); $i++) {
        $elem = $passwd[$i];
        if (ctype_digit($elem)) {
            $dig_check = TRUE;
        }
        elseif (ctype_lower($elem)) {
            $let_check = TRUE;
        }
    }
}

if ($dig_check == TRUE && $let_check == TRUE) {
    $valid = "YES";
}

###################

echo "Valid Password? $valid";

?>