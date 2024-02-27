<?php

    require_once "Cylinder.php";
    $cylinder1 = new Cylinder(5, 12);
    $cylinder2 = new Cylinder(8, 20);

    $cylinder1->setHeight(10);
    
    echo "Cylinder1: <br/>";
    echo $cylinder1->toString()." <br/>";
    echo "Volume = " . $cylinder1->getVolume() . "  cubic cm<br/><br/>";

    echo "Cylinder2: <br/>";
    echo $cylinder2->toString() . " <br/>";
    echo "Volume = " . $cylinder2->getVolume() . " cubic cm";

?>