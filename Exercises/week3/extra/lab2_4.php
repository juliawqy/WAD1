<?php

    if (isset($_GET["input"])) {
        $check = $_GET["input"];
        echo "Input binary number: $check <br>";
        for ($i=0; $i < strlen($check); $i++) {
            if ($check[$i]) {
                echo "True <br>";
            }
            else {
                echo "False <br>";
            }
        }
    }

?>