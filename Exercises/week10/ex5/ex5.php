<?php

    // /*
    // INSTRUCTIONS
    // ============

    // Add common code to autoload classes in sub-folder "model" and set local time
    require_once "header.php";

    spl_autoload_register(
        function ($class) {
            require_once "model/$class.php";
        }
    );

    // 1. Check if origin and destination addresses are entered by user.
    //    If they are not empty strings, proceed to compute travel duration.
    //    Otherwise, show an error message "Either origin, destination or both are unspecified"

        if (isset($_GET["origin"]) && isset($_GET["destination"])) {
    
        // 2. Retrieve name, origin, and destination information sent via HTTP GET

            $origin = $_GET["origin"];
            $destination = $_GET["destination"];
            $name = $_GET["name"];
    
        // 3. Create a TrafficDurationDAO object 

            $trafficdurationdao = new TrafficDurationDAO($origin, $destination);
    
        // 4. Get travel duration by calling a suitable method from the object

            $duration = $trafficdurationdao->getDuration();
    
        // 5. Check if the returned duration is "unknown". 
        //    If it is, display an error message "Invalid inputs".

            if ($duration == "unknown") {
                echo "Invalid inputs";
            }
    
        // 6. Display the traffic duration information (see screenshot on slides).
        //    Use date built-in function.           

            else {
                date_default_timezone_set('Asia/Singapore');
                echo "Dear $name, <br> Travelling time from $origin <br> to $destination is 
                $duration at current time (".date("h:i:s a", time()).")";
            }
        
        }
        else {
            echo "<h1> Either origin, destination or both are unspecified </h1>";
        }
    
?>