<?php

// YOUR CODE GOES HERE

$errorcount = 0; 

if (!empty($_GET["msg"]) && is_int($_GET["num"])) {

    $message = $_GET["msg"];
    $number = $_GET["num"];

    echo "<table border=1> <tr> <th> S/N </th> <th> Message </th> </tr>";
    for ($i=1; $i < $number+1; $i++) {
        echo " <tr> <td> $i </td> <td> $message </td> </tr>";
    }
    echo "</table>";
}

else {
    if (empty($_GET["msg"])) {
        $errorcount++;
        echo "$errorcount. Why No Message? <br>";    
    }
    if (empty($_GET["num"])) {
        $errorcount++;
        echo "$errorcount. Why No Number? <br>"; 
    }
    if (!ctype_digit($_GET["num"])) { #or (!is_int(strval($_GET["num"])))
        $errorcount++;
        echo "$errorcount. Num is not an Integer <br>"; 
    }
}




?>