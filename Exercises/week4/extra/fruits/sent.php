<?php

// YOUR CODE GOES HERE
$fruit = $_GET["fruit"];
$quantity = $_GET["quantity"];

for ($i=0;$i<$quantity;$i++) {
    echo "<img src=\"images/$fruit.jpg\"> &nbsp";
}

?>