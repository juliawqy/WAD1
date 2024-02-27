<?php
$str1 = '--apple--';
$str2 = '--apple';
$str3 = 'apple--';
$str4 = '--ap--ple--';

echo "<ol>";

if ( trim($str1, '-') == 'apple' ) {
    echo "<li >apple </li>";
} else {
    echo "<li> orange </li>";
}

if ( trim($str2, '-') == 'apple' ) {
    echo "<li >apple </li>";
} else {
    echo "<li> orange </li>";
}

if ( trim($str3, '-') == 'apple' ) {
    echo "<li >apple </li>";
} else {
    echo "<li> orange </li>";
}

if ( trim($str4, '-') == 'apple') {
    echo "<li >apple </li>";
} else {
    echo "<li> orange </li>";
}

if ( my_trim($str4, '-') == 'apple') {
    echo "<li >apple </li>";
} else {
    echo "<li> orange </li>";
}

echo "</ol>";

function my_trim($value, $ch) {
    $result = '';
    for ($i = 0 ; $i < strlen($value) ; $i++) {
        if ($value[$i] != $ch) {
           $result .= $ch;
        }
    }
    return $result;
}
?>