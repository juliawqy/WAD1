<?php

    # 1. Import the Ellipse.php
    require_once "Ellipse.php";
    

    # 2. Retrieve the a and b values sent from input.html
    #    For simplicity sake, assume that they are of the right format
    $a = $_GET["a"];
    $b = $_GET["b"];    

    # 3. Create an Ellipse object
    $ellipse = new Ellipse($a, $b);    
    

    # 4. Compute the area of the Ellipse object (using computeArea method)
    $area = $ellipse->computeArea();
    

    # 5. Display the area
    echo $area."<br>";
    

    # 6. Display the value of constant PI defined in class Ellipse
    echo Ellipse::PI;

    
?>