<?php

function calculate2($n1, $n2, $opr) {
    // PART A
    // YOUR CODE GOES HERE

    if ($opr === "+") {
        $result = $n1 + $n2;
    }
    elseif ($opr === "-") {
        $result = $n1 - $n2;
    }
    elseif ($opr === "*") {
        $result = $n1 * $n2;
    }
    else {
        if ($n2 == 0) {
            $result = "Undefined";
        }
        else {
            $result = $n1 / $n2;
        }
    }

    return $result;
}

$errors = ["is missing", "is non-numeric", ];


?>
<html>
<body>
    
<?php
    // PART B
    // YOUR CODE GOES HERE
    // Use $errors[] Array to list form input validation errors (IF ANY)

    if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
                
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        $result = calculate2($num1, $num2, $operator);
        echo "<h1> $result </h1>";
    }
    else {
        echo "<ul>";
        if (empty($_POST['num1'])) {
            echo "<li> num1 {$errors[0]} </li>";
        }
        elseif (!is_numeric($_POST['num1'])) {
            echo "<li> num1 {$errors[1]} </li>";
        }
        if (empty($_POST['num2'])) {
            echo "<li> num2 {$errors[0]} </li>";
        }
        elseif (!is_numeric($_POST['num2'])) {
            echo "<li> num2 {$errors[1]} </li>";
        }
        echo "</ul>";
    }



?>


</body>
</html>