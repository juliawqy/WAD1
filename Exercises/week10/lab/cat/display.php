<?php

require_once 'CatDAO.php';
$dao = new CatDAO();
$cats = $dao->getCats();

?>
<html>
<body>

    <h1>Our Cats</h1>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>

        <?php
            foreach($cats as $cat) {
                // YOUR CODE GOES HERE
                echo "<tr> <td> {$cat->getName()} </td>
                           <td> {$cat->getAge()} </td>
                           <td> {$cat->getGender()} </td>";
                if ($cat->getStatus() == "A") {
                    echo "<td> Available </td> </tr>";
                }
                else {
                    echo "<td> Pending Adoption </td> </tr>";
                }
                           
            }
        ?>

    </table>

</body>
</html>