<!DOCTYPE html>

<!--
    Name: WONG Qian Yu
    Email: qianyu.wong.2022
-->

<?php

// DO NOT MODIFY THE FOLLOWING CODE

# A 2D array representing a list of customers
# Each subarray represents a customer with 3 attributes: ID, Membership Category, and Amount Purchased
# For example, the first subarray is a customer with ID "C1" of membership category "Gold" and has spent "5000" dollars 
# Note: Membership category is not decided based on amount purchased
$customers = [
    ["C1", "Gold", 5000],
    ["C2", "Platinum", 15000],
    ["C3", "Silver", 3000],
    ["C4", "Silver", 2000],
    ["C5", "Silver", 100],
    ["C6", "Gold", 7000],
];
// DO NOT MODIFY THE FOLLOWING CODE
?>

<html>

<head>
    <title>Customer Listing</title>
</head>

<body>

    <form action="q2c.php" method="post">
        Category:
        <select name="categories[]" multiple size="3">

            <?php

            // MODIFY CODE HERE
            
            echo "<option value='Platinum'>Platinum</option>";
            echo "<option value='Gold'>Gold</option>";
            echo "<option value='Silver'>Silver</option>";
            ?>
        </select>
        <input type="submit" value="Filter" name="submit"/>
    </form>


    <table border="1">
        <tr>
            <th colspan="3">All Customers</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Amount Purchased</th>
        </tr>

        <?php

        // YOUR CODE GOES HERE
        
        if (empty ($_POST['submit'])) {
            foreach ($customers as $info_arr) {
                echo "<tr>";
                foreach ($info_arr as $info) {
                    echo "<td> $info </td> ";
                }
                echo "</tr>";
            }
        }
        else {
            $filter = $_POST['categories'];
            foreach ($customers as $info_arr){
                foreach ($filter as $cat) {
                    if ($info_arr[1] == $cat) {
                        echo "<tr>";
                    foreach ($info_arr as $info) {
                        echo "<td> $info </td> ";
                    }
                    echo "</tr>";
                    }
                }
            }
        }


        ?>
    </table>
</body>

</html>