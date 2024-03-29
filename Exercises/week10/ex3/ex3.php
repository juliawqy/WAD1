<?php

    // /*
    // INSTRUCTIONS
    // ============

    // 1.  Add code to autoload classes in sub-folder "model".

    spl_autoload_register(
        function($class) {
            require_once "model/$class.php";
        }
    );
    

    // 2. Create a new DeliveryOrderDAO object 
   
    $dodao = new DeliveryOrderDAO();

    // 3. Get DeliveryOrder objects from the newly created DeliveryOrderDAO object.
    //    Use a suitable method defined in DeliveryOrderDAO.php

    $do = $dodao->getDeliveryOrders(); #array of do objects
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delivery Orders</title>
    <style>
		table {
 			border-collapse: collapse;
 			border: 1px solid white;
            width: 500px;
 		}
         th{
             border: 1px solid white;
         }
         td{
             text-align: center;
         }
        body {
            background-image: url("./image/vintage.jpg");
        }
	</style>
</head>
<body>
<img src="./image/logo.jpg"> <br/>
<h3>Delivery Orders</h3>
<table>
	<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>

<?php
// 4. Create a table here to show the delivery order id, 
// name of the one making the order,
// and the final bill after membership discount.
// Use suitable methods defined in DeliveryOrder.php

    foreach ($do as $orderclass) {

        echo "<tr> <td> {$orderclass->getID()} </td> 
              <td> {$orderclass->getName()} </td> 
              <td> {$orderclass->computeBill()} </td> </tr>";
    }


?>

</table>
</body>
</html>