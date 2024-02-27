<?php
/* 
    Name:  WONG Qian Yu
    Email: qianyu.wong.2022
*/
?>
<html>
<body>
    <?php

    if (!isset($_POST["fruit"])) {
        echo "<h1> Please select a fruit </h1>";
    }
    else {
        $fruit_array = $_POST["fruit"];
        
        echo "<table border='1'>";

        #foreach ($fruits as $item) {
        #    echo "
        #    <tr>
        #        <td><img src='$item.jpg'></td>
        #    </tr>";
        #}
        # so no hardcoding the image name, since it is the same name as the label


        if (in_array("apple", $fruit_array)) { #get name and use $name.jpg
            echo "<tr> <td> <img src='apple.jpg'> </td> </tr>";
        }
        if (in_array("orange", $fruit_array)) {
            echo "<tr> <td> <img src='orange.jpg'> </td> </tr>";
        }
        if (in_array("pear", $fruit_array)) {
            echo "<tr> <td> <img src='pear.jpg'> </td> </tr>";
        }
        echo "</table>";

    }
    

    ?>
</body>
</html>