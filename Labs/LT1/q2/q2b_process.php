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
  $toShow = ["ID" => "ID", "Type" => "Category", "Desc" => "Description", "Price" => "Price", "Qty" => "Quantity", "Total" => "Line Total"];
  $keysToShow = array_keys($toShow);

  // YOUR CODE GOES HERE
  
  $MACq = $_POST['MAC'];
  $AKBq = $_POST['AKB'];
  $AMSq = $_POST['AMS'];
  $DELq = $_POST['DEL'];
  $MONq = $_POST['MON'];
  $DKBq = $_POST['DKB'];
  $DMSq = $_POST['DMS'];

  $item_var_arr = [$MACq, $AKBq, $AMSq, $DELq, $MONq, $DKBq, $DMSq];

  $total_count = 0;
  foreach ($item_var_arr as $itemq) {
    if ($itemq !== '') {
      $total_count += $itemq;
    }
  }
  if ($total_count == 0) {
    echo "No items are selected.";
  }
  

  






  ?>
</body>

</html>