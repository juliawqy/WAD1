<?php
// ?

require_once "cars.php";

?>
<html>
<body>

    <ul>
    <?php
        // YOUR CODE GOES HERE
        // Display Car objects
        foreach ($cars as $car) {
            echo "<li> {$car->getYear()} {$car->getMake()} {$car->getModel()} <br> 
                  <ul> <li> Rating: {$car->getRating()} </li> </ul> </li>";
        }
    ?>
    </ul>

</body>
</html>