<!DOCTYPE html>
<!--
    Name: WONG Qian Yu
    Email: qianyu.wong.2022
-->
<html lang="en">

<head>
    <title>Used PC Sale</title>
</head>

<body>
    <?php
    
    // DO NOT MODIFY THE FOLLOWING CODE
    $items = [
        "MAC" => ["Type" => "PC", "Desc" => "iMac Desktop", "Price" => 1000, "Available" => 6, "Bundle" => 1],
        "AKB" => ["Type" => "Keyboard", "Desc" => "Apple Keyboard", "Price" => 80, "Available" => 7, "Bundle" => 1],
        "AMS" => ["Type" => "Mouse", "Desc" => "Apple Magic Mouse", "Price" => 50, "Available" => 5, "Bundle" => 1],
        "DEL" => ["Type" => "PC", "Desc" => "Dell Desktop PC", "Price" => 600, "Available" => 6, "Bundle" => 2],
        "MON" => ["Type" => "Monitor", "Desc" => "Dell Ultrashart Monitor", "Price" => 200, "Available" => 6, "Bundle" => 2],
        "DKB" => ["Type" => "Keyboard", "Desc" => "Dell Keyboard", "Price" => 30, "Available" => 5, "Bundle" => 2],
        "DMS" => ["Type" => "Mouse", "Desc" => "Dell Optical Mouse", "Price" => 10, "Available" => 8, "Bundle" => 2],
      ];
   // END OF DO NOT MODIFY THE FOLLOWING CODE

    
    // These statements may get you started...
    $names = array_keys($items["MAC"]);
    $colSpan = count($names) + 1;
        
    // YOUR CODE GOES HERE
    
    echo "<table border='1'> 
            <tr> 
                <th colspan=$colSpan> <h1> Store Inventory <h1> </th> 
            </tr>
            <tr>
                <th> ID </th>";
    foreach ($names as $headers) {
        echo "<th> $headers </th>";
    }
    echo "</tr>";
    
    $available = 0;
    $total_price = 0;
    foreach ($items as $id => $item_arr) {
        $item_price = 0;
        $item_avail = 0;
        echo "<tr> <td> $id </td>";
        foreach ($names as $headers) {
            echo "<td> $item_arr[$headers] </td>";
            if ($headers == "Available") {
                $available += $item_arr[$headers];
                $item_avail = $item_arr[$headers];
            }
            if ($headers == "Price") {
                $item_price = $item_arr[$headers];
            } 
        }
        $total_price += $item_avail*$item_price;
        echo "</td>";
    }

    echo "<tr> <th colspan='3'> Total Number of Items : </th>
          <th colspan='3'> $available </th>
          <tr> <th colspan='3'> Total $ Amount : </th>
          <th colspan='3'> $total_price </th>";


    
    
    ?>
</body>

</html>