<?php

function calculate2($n1, $n2, $opr) {
    // YOUR CODE GOES HERE
    // COPY YOUR CODE FROM Part A (two.php)

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

function calculate3($n1, $n2, $n3, $opr1, $opr2) {
    // PART C
    // YOUR CODE GOES HERE
    
    if (($opr2 === "*" || $opr2 === "/") && !($opr1 === "*" || $opr1 === "/")) {
        $result = calculate2($n1, calculate2($n2, $n3, $opr2), $opr1);
    }
    else {
        $result = calculate2(calculate2($n1, $n2, $opr1), $n3, $opr2);
    }

    return $result;
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$operator1 = $_POST['operator1'];
$operator2 = $_POST['operator2'];

$result = calculate3($num1, $num2, $num3, $operator1, $operator2);

?>
<html>
<body>
<h1>Result: <?= $result; ?></h1>
</body>
</html>