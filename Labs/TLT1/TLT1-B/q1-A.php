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

    if (!isset($_POST['person'])) {
        echo "<h1> You must select a person! </h1>";
    }
    else {
        $person = $_POST['person'];
        echo "<h1> $messages[$person] </h1>
        <img src=\"$person.jpg\">
        ";
    }

?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>