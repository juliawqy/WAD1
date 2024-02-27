<?php

/*
purchase.php must display the following table with user input:

Your Purchase
+-----+--------+-------+----------+-----------+
| S/N | Name   | Price | Quantity | Sub-Total |
+-----+--------+-------+----------+-----------+ 
| 1   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
| 2   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
| ..  | ..     | ...   | ...      | ...       |
+-----+--------+-------+----------+-----------+ 
| n   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
|                          Total: | <$$$>     |
+-----+--------+-------+----------+-----------+ 

*/


// By importing this file, we can access $drinks (Array of 5 Drink objects)
// Relative path (drinks.php is in the same directory as this file)
require_once 'drinks.php';


?>
<html>
<head>
    <title>Korean Drinks Shop - Purchase Summary</title>
</head>
<body>

    <table border='1'>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub-Total</th>
        </tr>
        
        <?php
            // YOUR CODE GOES HERE
            $sn = 0;
            $total = 0;
            foreach ($drinks as $drink) {
                $sn++;
                $name = $drink->getName();
                $price = $drink->getPrice();
                $quantity = $_POST["$sn"];
                $subtotal = $price*$quantity;
                $total += $subtotal;
                echo "<tr> <td> $sn </td>
                           <td> $name </td>
                           <td> $price </td>
                           <td> $quantity </td>
                           <td> $subtotal </td> </tr>";

            }
            echo "<tr> <td colspan='4' align='right'> Total: </td> <td> $$total </td> </tr>";
        ?>

    </table>
</form>
</body>
<html>