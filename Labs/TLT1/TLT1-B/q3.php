<?php
/* 
    Name:  
    Email: 
*/

$people = [
    "trump"    => 'Donald Trump',
    "clinton"  => 'Hillary Clinton',
    "kim"      => 'Kim Jong Un',
    "moon"     => 'Moon Jae In',
    "putin"    => 'Vladimir Putin'
];

?>

<!DOCTYPE html>
<html>
<!-- <body>
    <form method='post' action='q3.php'>
        <table border='1'> 
            <?php
            foreach ($people as $person => $fullname) {
                echo "<tr> <td> <input type='checkbox' name='people[]' value=\"$person\" id=\"$person\">
                <label for=\"$person\"> $fullname </label> </td> </tr>";
            }
            ?>
            <tr> <td> <input type="submit"> </td> </tr>
        </table>
    </form>
</body>
</html> -->

<?php

    if (empty($_POST['people'])) {
        if (isset($_POST['submit'])) {
            echo "<h1>You didn't select anyone! Select at least THREE (3) people! </h1>";
        }
    }
    elseif (count($_POST['people']) < 3) {
        echo "<h1> Select at least THREE (3) people! </h1>";
    }
    
    echo "<form method='post' action='q3.php'>
    <table border='1'> ";

        foreach ($people as $person => $fullname) {
            echo "<tr> <td> <input type='checkbox' name='people[]' value=\"$person\" id=\"$person\">
            <label for=\"$person\"> $fullname </label> </td> </tr>";
        }

        echo "<tr> <td> <input type='submit' name='submit'> </td> </tr>
        </table>
    </form>";
    
    if (!empty($_POST['people']) && count($_POST['people']) >= 3) {
        $selected = $_POST['people'];
        echo "<table border='1'>";
        $check_table = [];
        for ($i=0;$i<count($selected);$i++) {
            echo "<tr>";
            $check_row = [];
            for ($j=0;$j<count($selected);$j++) {
                $rando = rand(0,count($selected)-1);
                $check_row[] = $rando;
                echo "<td> <img src=\"$selected[$rando].jpg\"> </td> ";
            }
            echo "</tr>";
            $check_table[] = $check_row;
        }
        echo "</table>";

        $check_left = [];
        for ($k=0;$k<count($check_table);$k++) {
            $check_left[] = $check_table[$k][$k];
        }
        if (count(array_unique($check_left))==1) {
            echo "<h1> Top Left to Bottom Right Diagonal FOUND </h1>";
        }

        $check_right = [];
        for ($z=count($check_table)-1,$x=0;$z!=0,$x<count($check_table);$z--,$x++) {
            $check_right[] = $check_table[$x][$z];
        }
        if (count(array_unique($check_right))==1) {
            echo "<h1> Top Right to Bottom Left Diagonal FOUND </h1>";
        }
    }






?>