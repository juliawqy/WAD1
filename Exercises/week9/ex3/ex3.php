<?php
     require_once "Vehicle.php";
     echo '<h4>Original: </h4>';

     $v1 = new Vehicle("27","car");
     $v2 = new Vehicle("37","truck");
     
     echo "<br/>";
     
     # [C1] Print information about $v1 (use printInfo)

     echo $v1->printInfo();

     #####

     echo "<br/>";

     # [C2] Print information about $v2 (use printInfo)

     echo $v2->printInfo();

     #####

     echo '<h4>After calling setType of $v1 and $v2: </h4>';

     # [C3] Update the type of $v1 to "van" (use setType)

     $v1->setType("van");

     #####

     # [C4] Update the type of $v2 to "bus" (use setType)

     $v1->setType("bus");
     
     #####
     
     # [C5] Print information about $v1 (use printInfo)

     echo $v1->printInfo();

     #####

     echo "<br/>";
     
     # [C6] Print information about $v2 (use printInfo)

     echo $v2->printInfo();
     
     #####

     echo "<br/>";
?>