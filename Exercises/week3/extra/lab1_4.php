<?php

    $tempF = $_GET["tempInF"];
    $tempC = ($tempF - 32) * 5 / 9; 
    echo "$tempF F = $tempC C";

?>