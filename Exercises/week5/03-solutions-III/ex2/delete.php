<?php
    # This function prints contents of the input dictionary $items
    # as a HTML table with a header containing: Item and Category
    function print_table($items){
        echo "<table border='1'>";
        echo "<tr>
                <th>Item</th>
                <th>Category</th>
              </tr>";
        foreach ($items as $key => $value){
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>

<html>

<body>

    <?php
        $items = [  "celery" => "vegetables", "spinach" => "vegetables", 
                    "apple" => "fruits" ];
        
        echo "<strong>Original:</strong><br/>";
        print_table($items);            
        
        # Write code here to remove all key-value pairs from $items
        # whose value matches the selected category received from delete.html
        
        $category = $_GET["category"];
        foreach ($items as $key => $value){
            if ($value == $category){
                unset($items[$key]);
            }
        }

        ############

        echo "<br/><strong>After removal:</strong>";
        print_table ($items);
    ?>
   
</body>

</html>