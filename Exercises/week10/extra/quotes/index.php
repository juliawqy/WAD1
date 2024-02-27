<?php

// list of valid categories;  more categories may be added in the future!
$categories = [ 'love', 'life', 'friend'];

// 1. initialize variables
$quote = '';
require_once "WiseMan.php";

// 2.  process


// 3. display
?>
<html>
<body>
    <form method="post">
        Category: 
        <?php
        $count = 0;
            foreach ($categories as $item) {
                $count++;
                if ($count == 1) {
                    $selected = "checked";
                }
                else {
                    $selected = "";
                }
                echo "
                    <input type='radio' name='category' id='category_'$item' value='$item' $selected />
                    <label for='category_'$item'> $item </label>
                ";
            }
        ?>
        <input type='submit' name = 'submit' value='Get quote' />
    </form>

    <?php
        if (isset($_POST["submit"])) {
            $dao = new WiseMan($_POST["category"]);
            $quote = $dao->getQuote();
        }
    ?>

    <h1> <?=$quote ?> </h1>
</body>
</html>