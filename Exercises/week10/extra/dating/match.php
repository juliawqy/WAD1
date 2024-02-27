<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object's $people is an Array of Person objects.
$dao = new PersonDAO();


// YOUR CODE GOES HERE


?>
<html>
<head>
    <title>Dating - Find Me Matches</title>
</head>
<body>
    <h3>Find Me Matches</h3>

    <form action='match.php' method='POST'>

        Gender: 
        <input type='radio' name='gender' value='M' checked> Male
        <input type='radio' name='gender' value='F'> Female
        <br>

        <select name='category'>
            <option value='age'> Age </option>
            <option value='height'> Height </option>
            <option value='weight'> Weight </option>
        </select>

        <select name='operator'>
            <option value='>'>Greater Than</option>
            <option value='<'>Less Than</option>
        </select>
        <input type='number' name='category_value' required>

        <br>
        <input type='submit' name='match_button' value='Find Matching Profiles'>
    </form>

    <!-- Display Matches if found -->
    <?php
        // YOUR CODE GOES HERE
        if (isset($_POST["match_button"])) {
            $gender = $_POST["gender"];
            $number = $_POST["category_value"];
            $finalArr = [];
            foreach ($dao->getPeopleByGender($gender) as $gObj) {
                if ($_POST["category"] == "age") {
                    if ($_POST["operator"] == ">") {
                        if ($gObj->getAge() > $number) {
                            $finalArr[] = $gObj;
                        }
                    }
                    else {
                        if ($gObj->getAge() < $number) {
                            $finalArr[] = $gObj;
                        }
                    }
                }
                elseif ($_POST["category"] == "height") {
                    if ($_POST["operator"] == ">") {
                        if ($gObj->getHeight() > $number) {
                            $finalArr[] = $gObj;
                        }
                    }
                    else {
                        if ($gObj->getHeight() < $number) {
                            $finalArr[] = $gObj;
                        }
                    }
                }
                else {
                    if ($_POST["operator"] == ">") {
                        if ($gObj->getWeight() > $number) {
                            $finalArr[] = $gObj;
                        }
                    }
                    else {
                        if ($gObj->getWeight() < $number) {
                            $finalArr[] = $gObj;
                        }
                    }
                }
            }
            $count = count($finalArr);
            echo "<table border='1'
            <tr>
                <th colspan='3'> Matches ($count) </th>
            </tr>
            <tr>";
            foreach ($finalArr as $pObj) {
                echo "<td> <table border='1'
                        <tr>
                            <td colspan='2'> {$pObj->getImage()} </td>
                        </tr>
                        <tr>
                            <td> fullname </td>
                            <td> {$pObj->getFullname()} </td>
                        </tr>
                        <tr>
                            <td> gender </td>
                            <td> {$pObj->getGender()} </td>
                        </tr>
                        <tr>
                            <td> age </td>
                            <td> {$pObj->getAge()} </td>
                        </tr>
                        <tr>
                            <td> height </td>
                            <td> {$pObj->getHeight()} </td>
                        </tr>
                        <tr>
                            <td> weight </td>
                            <td> {$pObj->getWeight()} </td>
                        </tr>
                    </table> </td>";
            }
            echo "</th> </table>";
        }
        

        
    ?>
</body>
</html>