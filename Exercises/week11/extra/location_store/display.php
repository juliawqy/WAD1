<?php
    require_once "common.php";

    /* Enter code here */
    /* Retrieve list of locations and shop name */

    
?>

<html>
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    
    <body>
    
    <form method="POST" action="display.php">

        <?php    
            echo "<h3> Products Available for the location and store : </h3>";
            
            /* Enter codes here ....                                                         */
            /* display them in a dropdown list. It remembers the value that the user select. */

            $shopdao = new ShopDAO();
            $storeLocArr = $shopdao->retrieveAllLocation();
            echo "Enter the location : <select name='location'>";

            foreach ($storeLocArr as $storeLocObj) {
                    echo "<option value=\"$storeLocObj\"> $storeLocObj </option>";
            }

            echo "</select> <br>
                  Enter choose the shop name : <select name='shopname'>";
            
            $storeNameArr = $shopdao->retrieveAllStoreName();
            foreach ($storeNameArr as $storeNameObj) {
                echo "<option value=\"$storeNameObj\"> $storeNameObj </option>";
            }

            echo "</select> <br>";
            
            ?>
        <br/>
        <input type="submit" name="submit" value="Submit"/> </br> </br>
        
        <!-- Prepare the table with the list of products from the store -->


        <?php
        
        /* Enter codes here to display the product list, if available or error statements */

            if (isset($_POST["submit"])) {
                $location = $_POST["location"];
                $shopname = $_POST["shopname"];
                $shopdao = new ShopDAO();
                $productdao = new ProductDAO();
                $ifExist = $shopdao->retrieveLocationStorename($location, $shopname); #returns boolean

                if ($ifExist) {
                    $productsArr = $productdao->retrieveByShopName($shopname);
                    if ($productsArr) {
                        echo "The list of Products available at <b> $shopname </b> in <b> $location </b> <br> <br> 
                            <table border='1'>
                                <tr>
                                    <th> Item </th>
                                    <th> Category </th>
                                    <th> Price </th>
                                </tr>";
                        foreach ($productsArr as $productObj) {
                            echo "<tr>
                                    <td> {$productObj->getItem()} </td>
                                    <td> {$productObj->getcategory()} </td>
                                    <td> \${$productObj->getPrice()} </td>
                                </tr>";
                        }
                        echo "</table>";
                    }
                }
                else {
                        echo "The store <b> $shopname </b> in <b> $location </b> does not have any products for sale.";
                }
            }
            else {
                echo "The location <b> $location </b> does not have shop <b> $shopname</b>.";
            }




        ?>  

    </form>
    </table>
    </body> 
</html>