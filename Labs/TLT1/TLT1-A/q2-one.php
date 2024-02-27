<?php
/* 
    Name:  WONG Qian Yu
    Email: qianyu.wong.2022
*/
?>
<html>
<body>
    <?php
    

        if (isset($_POST["send"]) && !isset($_POST["fruit"])) {
            echo "<h1> Please select a fruit </h1>";
        }
        elseif (isset($_POST["send"])) {
            $fruit_array = $_POST["fruit"];
            $num_select = count($fruit_array);
            if ($num_select == 1) {
                echo "<h1> You selected $num_select fruit </h1>";
            }
            else {
                echo "<h1> You selected $num_select fruits </h1>";
            }

            echo "<table border='1'>";
            if (in_array("apple", $fruit_array)) {
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

        echo "<form method='post' action='q2-one.php'>
            <input type='checkbox' value='apple' name='fruit[]'>Apple
            <input type='checkbox' value='orange' name='fruit[]'>Orange
            <input type='checkbox' value='pear' name='fruit[]'>Pear
            <br>
            <input type='submit' name='send'>
            </form>";

    ?>
</body>
</html>