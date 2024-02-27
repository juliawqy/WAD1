<?php
// ============
// INSTRUCTIONS
// ============
// 1.  Add code to load Product.php which is in sub-folder "model".
    require_once "model/Product.php";

// 2.  Instantiate two Product objects based on values received from sales.html 
//     For this exercise: To simplify, no need to do form validation.
//                        Assume that the user checks a radio button for burger 
//                        and another one for pizza
    $pizza = new Product("Pizza",$_GET["Pizza"]);
    $burger = new Product("Burger",$_GET["Burger"]);

// 3.  Call the toString() function on both objects to get their String values.
    $pizza_str = $pizza->toString();
    $burger_str = $burger->toString();

// 4.  Calculate the (1) total price before GST and (2) total price after GST 
    $bfr_price = $pizza->getPrice() + $burger->getPrice();
    $aft_price = $pizza->getGSTPrice() + $burger->getGSTPrice();

// ... continue below

?>
<html>
<body>
    <?php
        // ============
        // INSTRUCTIONS
        // ============
        // ... continue from above
        // 5.  Print both String values and the total price on separate lines.
        //     See slides for expected output and behavior.

        echo $pizza_str."<br>";
        echo $burger_str."<br>";
        echo "Total price is $$bfr_price; after GST $$aft_price";

    ?>
</body>
</html>