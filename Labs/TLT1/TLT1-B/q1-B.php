<?php
/* 
    Name:  
    Email: 
*/

$people = [
    "trump"    => 'Donald Trump',
    "clinton"  => 'Hillary Clinton',
    "kim"      => 'Kim Jong Un',
    "moon"     => 'Moon Jae In'
];

?>
<!DOCTYPE html>
<html>
<body>
    <form method='post' action='q1-B-display.php'>

        <table border='1'>
            <tr>
                <th>Person</th>
            </tr>

            <?php
            
                foreach($people as $name => $person) {
                    echo " <tr> <td>                    
                    <input type='checkbox' name='people[]' value=\"$name\" id=\"$name\"> 
                    <label for=\"$name\">$person</label>
                    </td> </tr> ";
                }
            
            ?>

            <tr>
                <td>
                    <input type='submit'>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>