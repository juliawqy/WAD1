<?php
    // In real-life, the following will be retrieved from a database.
    // List of countries.
    $countries = array("Singapore", "Indonesia", "Malaysia", "Philippines", 
                "Thailand", "Brunei", "Cambodia", "Laos", "Vietnam", "Myanmar"
            );
?>
<html>
<body>
    <form action="ex4_process.php">
        Select:<br/>
        
        <?php

        /*
        INSTRUCTIONS
        ============
        1.  For each country in array $countries, display a checkbox for the country.
        2.	Display 5 countries / checkboxes per 1 line.
        */
        
        $count = 1;
        foreach ($countries as $country) {
            echo " <input type='checkbox' name='countries[]' value=$country> $country";
            if ($count%5 == 0) {
                echo "<br>";
            }
            $count++;
        }
        
        ?>
        
        <br/>
        <input type="submit" /><br/>
    </form>
</body>
</html>