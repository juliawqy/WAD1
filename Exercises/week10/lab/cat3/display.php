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

            if (isset($_GET["submit"])) {
                $status = $_GET["status"];
                $cats = $dao->getCatsByStatus($status);
            }
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

    <br> Filter by Status: <br>

    <?php

        $a_selected = "selected";
        $p_selected = "";

        if (isset($_GET["submit"])) {
            if ($_GET["status"] == "P") {
                $a_selected = "";
                $p_selected = "selected"; 
            }
        }

        echo "<form action=\"display.php\">
            <select name=\"status\">
                <option value=\"A\" $a_selected> Available </option>
                <option value=\"P\" $p_selected> Pending Adoption </option>
            </select> 

            <br> <br>
            
            <input type=\"submit\" name=\"submit\" value=\"Filter\">";

        
        echo "</form>"
    ?>

</body>
</html>