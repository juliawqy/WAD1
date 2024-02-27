<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object allows us to obtain:
//    - $people (Array of Person objects)
//    - a subset of $people where gender is either 'M' or 'F'
$dao = new PersonDAO();
// You can now call all public methods of PersonDAO class.


?>
<html>
<head>
    <title>Dating - Show All Profiles</title>
</head>
<body>
    <h3>Show All Profiles</h3>
     
        <?php
            // YOUR CODE GOES HERE
            // There are multiple Tables within a Table
            
            //===================================================================
            // Display a Table containing "Men" only
            // There are multiple Tables within a Table
            // YOUR CODE GOES HERE
            echo "<table border='1'
                    <tr>
                        <th colspan='3'> Men(3) </th>
                    </tr>
                    <tr>";
            foreach ($dao->getPeopleByGender("M") as $mObj) {
                echo "<td> <table border='1'
                        <tr>
                            <td colspan='2'> {$mObj->getImage()} </td>
                        </tr>
                        <tr>
                            <td> fullname </td>
                            <td> {$mObj->getFullname()} </td>
                        </tr>
                        <tr>
                            <td> gender </td>
                            <td> {$mObj->getGender()} </td>
                        </tr>
                        <tr>
                            <td> age </td>
                            <td> {$mObj->getAge()} </td>
                        </tr>
                        <tr>
                            <td> height </td>
                            <td> {$mObj->getHeight()} </td>
                        </tr>
                        <tr>
                            <td> weight </td>
                            <td> {$mObj->getWeight()} </td>
                        </tr>
                    </table> </td>";
            }
            echo "</th> </table>";            

            echo '<hr>';
            //===================================================================
            // Display a Table containing "Women" only
            // There are multiple Tables within a Table
            // YOUR CODE GOES HERE
            
            echo "<table border='1'
                    <tr>
                        <th colspan='3'> Women(3) </th>
                    </tr>
                    <tr>";
            foreach ($dao->getPeopleByGender("F") as $fObj) {
                echo "<td> <table border='1'
                        <tr>
                            <td colspan='2'> {$fObj->getImage()} </td>
                        </tr>
                        <tr>
                            <td> fullname </td>
                            <td> {$fObj->getFullname()} </td>
                        </tr>
                        <tr>
                            <td> gender </td>
                            <td> {$fObj->getGender()} </td>
                        </tr>
                        <tr>
                            <td> age </td>
                            <td> {$fObj->getAge()} </td>
                        </tr>
                        <tr>
                            <td> height </td>
                            <td> {$fObj->getHeight()} </td>
                        </tr>
                        <tr>
                            <td> weight </td>
                            <td> {$fObj->getWeight()} </td>
                        </tr>
                    </table> </td>";
            }
            echo "</th> </table>";  

        ?>
    </table>

</body>
</html>