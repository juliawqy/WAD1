<?php
session_start();
$errors = [];
$age = '';
$gender = '';
$candidate_str = '';

$age = $_GET["age"];
if (isset($_GET["candidates"])) {
    $candidates = $_GET["candidates"];
}
else {
    $candidates = [];
}
$checkNum = "0123456789";
$ageErr = False;
for ($i=0;$i<strlen($age);$i++) {
    $ch = $age[$i];
    if (!str_contains($checkNum, $ch)) {
        $ageErr = True;
    }
}
if ($ageErr || $age < 18 || $age > 99) {
    $errors[] = "Invalid age";
}
if (empty($_GET["gender"])) {
    $errors[] = "Invalid gender";
}
else {
    $gender = $_GET["gender"];
}
if (count($candidates)>2) {
    $errors[] = "Too many selections";
}
if (count($errors) != 0) {
    $_SESSION["age"] = $age;
    $_SESSION["gender"] = $gender;
    $_SESSION["candidates"] = $candidates;
    $_SESSION["errors"] = $errors;
    header ("Location: vote.php");
    exit;
}
else {
    echo "Thank you for your vote today! <br> <ul>";
    foreach ($candidates as $candidate) {
        echo "<li> $candidate </li>";
    }
    echo "</ul>";
    
}

?>
