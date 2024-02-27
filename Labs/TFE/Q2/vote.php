<?php
    session_start();
?>
<html>
<head>
 <title>Vote Today!</title>
</head>
<body>

<?php
$f_checked = "";
$m_checked = "";
$d_selected = "";
$t_selected = "";
$j_selected = "";
$m_selected = "";

if (!isset($_SESSION["errors"])) {
    echo "<h2> Vote Today! </h2>";
    $age="";
}
else {
    $age = $_SESSION["age"];
    if ($_SESSION["gender"] == "Female") {
        $f_checked = "checked";
    }
    else {
        $m_checked = "checked";
    }
    $candidates = $_SESSION["candidates"];
    if (in_array("Donald Trump", $candidates)) {
        $d_selected = "selected";
    }
    if (in_array("Ted Cruz", $candidates)) {
        $t_selected = "selected";
    }
    if (in_array("Jeb Bush", $candidates)) {
        $j_selected = "selected";
    }
    if (in_array("Mario Rubio", $candidates)) {
        $m_selected = "selected";
    }
    $errorArr = $_SESSION["errors"];
    $errorNum = count($errorArr);
    echo "You have $errorNum errors in your form. Please rectify them and submit again. <br>
          <ol>";
    foreach ($errorArr as $error) {
        echo "<li> $error </li>";
    }
    echo "</ol>";
}

?>

<?php
#<h2>Vote Today!</h2>
    echo "<form method='GET' action='process_vote.php'>

        Your age: <input type='text' name='age' value=$age><br>
        Your gender: <input type='radio' name='gender' value='Female' $f_checked>Female
        <input type='radio' name='gender' value='Male' $m_checked>Male<br>

        District candidates (pick up to 2): <br>
        <input type='checkbox' name='candidates[]' value='Donald Trump' $d_selected >Donald Trump<br>
        <input type='checkbox' name='candidates[]' value='Ted Cruz' $t_selected >Ted Cruz<br>
        <input type='checkbox' name='candidates[]' value='Jeb Bush' $j_selected >Jeb Bush<br>
        <input type='checkbox' name='candidates[]' value='Marco Rubio' $m_selected >Marco Rubio<br>

        <input type='submit' name='submit' value='Vote Today'>
    </form>";

?>
</body>
</html>

