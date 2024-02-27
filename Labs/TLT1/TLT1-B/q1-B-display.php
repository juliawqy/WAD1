<?php
/* 
    Name:  
    Email: 
*/

    $messages = [
        "trump"   => "Make America Great Again",
        "clinton" => "More Women in Office",
        "kim"     => "Nukes Fly High and Far",
        "moon"    => "One Korea One People"
    ];

    if (!isset($_POST['people'])) {
        echo "<h1> You must select a person! </h1>";
    }
    else {
        $people = $_POST['people'];
        echo "<table border='1'>
        <tr> <th> Photo </th> <th> Message </th> </tr>";
        foreach ($people as $person) {
            echo "<tr> <td> <img src=\"$person.jpg\"> </td>
            <td> $messages[$person] </td> </tr>
            ";
        }
        echo "</table>";
    }


?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>