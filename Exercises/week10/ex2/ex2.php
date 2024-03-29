<!DOCTYPE html>
<html>
    <header>
        <title>Traffic Information</title>
    </header>

    <body>

        <?php

            // /*
            // INSTRUCTIONS
            // ============

            // 1. Autoload Traffic.php which is in sub-folder "model".
            
            // 2. Read the location information passed from ex2.html using HTTP GET
            
            // 3. Create a new Traffic object

            // 4. Query the traffic status information at the entered location, and
            //    current hour of the day (code to find current hour of the day is provided below)
            //    by using a suitable method from the Traffic object
            date_default_timezone_set('Asia/Singapore');
            $hourOfTheDay = date('H');
            
            // 5. Display the traffic status information (see slides for an example)

            spl_autoload_register (
                function($class) {
                    require_once "model/$class.php";
                }
            );

            $location = $_GET["location"];
            $traffic_condition = new Traffic();
            $condition = $traffic_condition->getTrafficStatus($location, $hourOfTheDay);

            echo "Traffic situation at <b> $location </b> is <b> $condition </b>";
            
        ?>
        

    </body>

</html>