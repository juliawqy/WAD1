<?php

    require_once "Driver.php";
    require_once "Location.php";
    

    $locations = [ ["Netherlands","2-Sep"],
                   ["Italy", "9-Sep"],
                   ["Singapore", "30-Sep"],
                   ["Japan", "7-Oct"]];

    # assume that the drivers are ranked in the indexed array.
    # e.g. ["Max VERSTAPPEN","George RUSSELL","Charles LECLERC"]
    #     1st - Max VERSTAPPEN
    #     2nd - George RUSSELL
    #     3rd - Charles LECLERC

    $drivers = ["Netherlands" => ["Max VERSTAPPEN","George RUSSELL","Charles LECLERC"],
                "Italy" => ["Max VERSTAPPEN","George RUSSELL","Charles LECLERC"],
                "Singapore" => ["Sergio PEREZ", "Charles LECLERC", "Carlos SAINZ"],
                "Japan" => ["Max VERSTAPPEN", "Charles LECLERC", "Sergio PEREZ"]];

    # your code goes here

    $location_arr = [];
    $drivers_arr = [];

    foreach (array_keys($drivers) as $country) {    
        for ($i=0; $i<3; $i++) {
            $drivers_arr[$drivers[$country][$i]] = new Driver($drivers[$country][$i], $i+1);
        }
    } #what is this for

    foreach ($locations as $location_info) {
        $location_arr[$location_info[0]] = new Location($location_info[0], $location_info[1], $drivers[$location_info[0]]);
    }


    echo "<table border='1'>
            <tr> <th> Location </th> <th> Start Date </th> <th> 1st </th> <th> 2nd </th> <th> 3rd </th> </tr>";
        foreach ($location_arr as $row_info) {
            echo "<tr> 
                      <td>" . $row_info->getCountry() . "</td>" .
                      "<td>" . $row_info->getStartDate() . "</td>" .
                      "<td>" . $row_info->getDrivers()[0] . "</td>" .
                      "<td>" . $row_info->getDrivers()[1] . "</td>" .
                      "<td>" . $row_info->getDrivers()[2] . "</td>" .
            "</tr>";
        }


#            foreach ($locations as $location) {
#                echo "<tr> <td> $location[0] </td> <td> $location[1] </td>";
#                foreach (array_keys($drivers) as $loc_check) {
#                    if ($loc_check == $location[0]) {
#                        echo "<td> {$drivers[$loc_check][0]} </td> 
#                              <td> {$drivers[$loc_check][1]} </td> 
#                              <td> {$drivers[$loc_check][2]} </td>";
#                    }
#                }
#                echo "</tr>";
#            }
    echo "</table>";

?>