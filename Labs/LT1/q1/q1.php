<!--
    Name: WONG Qian Yu
    Email: qianyu.wong.2022
-->
<!DOCTYPE html>
<html>

<head>
    <title>Q1</title>
</head>

<body>
    <?php
    // DO NOT MODIFY THE FOLLOWING CODE
    $fruit_prices = [
        'Apple'  => 0.50,
        'Orange' => 0.60
    ];
    // END OF DO NOT MODIFY THE FOLLOWING CODE

    // YOUR CODE GOES HERE

    $appleq = $_GET["appleq"];
    $orangeq = $_GET["orangeq"];

    if (empty($appleq)) {
        $appleq = 0;
    }
    if (empty($orangeq)) {
        $orangeq = 0;
    }

    $fruit_arr = ['Apple' => $appleq, 'Orange' => $orangeq];

    if ($appleq==0 && $orangeq==0) {
        echo "You have not made any selection";
    }
    else {
        echo "<h1> Your Selection </h1> <br>
              <table>
                <tr> 
                    <th> Fruit </th> 
                    <th> Quantity </th> 
                    <th> Unit Price </th>
                </tr>";
        $total_price = 0;
        foreach ($fruit_prices as $fruit => $fruitp) {
            if ($fruit_arr[$fruit] != 0) {
                echo "<tr>
                        <td> $fruit </td>
                        <td> $fruit_arr[$fruit] </td>
                        <td> $fruitp </td>";
                $total_price += $fruit_arr[$fruit]*$fruitp;
            }
        }
        echo "<tr> <td> &nbsp <td> </tr> 
              <tr> <td colspan='3'> Total price: $$total_price </td> </tr> </table>";   
    }
        
    

    ?>

</body>

</html>