<?php
// display.php 
// code to generate sample output

require_once 'common.php';

$dao = new ProductDAO();
$productArr = $dao->retrieveAll();

echo "<html><body>";
print_form($productArr);
echo "</body></html>";

function print_form($productArr) {
    // YOUR CODE GOES HERE
    echo "<form method='POST' action='order.php'>
              <table border='1'>
                  <tr> 
                      <th> Name </th>
                      <th> Price </th>
                      <th> Size </th> 
                  </tr>";
    foreach ($productArr as $prodObj) {
        echo "<tr> 
                  <td> {$prodObj->getName()} </td>
                  <td> {$prodObj->getPrice()} </td>
                  <td> <select name='item[]'>
                           <option value='default' selected> 
                               -- Pick a size --
                           </option>";
        $sizeArr = $prodObj->getStock();
        foreach ($sizeArr as $size=>$stock) {
            echo "<option value=$size> 
                      $size
                  </option>";
        }
        echo "</select> </td> </tr>";
    }
    echo "<tr> <td colspan='3'> <input type='submit' value='Order'> </td> </tr>
          </table> </form>";

    

    }

?>

