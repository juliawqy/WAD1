<?php
    require_once "model/Item.php";

    # In reality, this will be retrieved from a database
    $items = array(
                new Item ("Table", "Furniture", 50),
                new Item ("Chair", "Furniture", 25),
                new Item ("Forklift", "Vehicle", 20),
                new Item ("Crane", "Vehicle", 1)
            );
?>

<html>
    <body>
        <?php
            # Complete code here
            # Print a HTML table containing each item in $items (see above)
            # of the category specified by the user in the HTML form

            $return_cat = $_GET["category"];
            echo "<table border='1'>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                    </tr>";
            foreach ($items as $check_item) {
                if ($check_item->getCategory() == $return_cat) {
                    echo "<tr>
                            <td>{$check_item->getName()}</td>
                            <td>{$check_item->getCategory()}</td>
                            <td>{$check_item->getQuantity()}</td>
                        </tr>";
                }
            }
            echo "</table>";

            
            ######################
        ?>
    </body>
</html>