<?php
 
    ### START OF DO NOT MODIFY ###
 
    require_once 'common.php';
    $selected_rider_names = [];
    $selected_delivery_ids = [];
    if (isset($_POST['riders'])){
        $selected_rider_names = $_POST['riders'];
    }
    if (isset($_POST['deliveries'])){
        $selected_delivery_ids = $_POST['deliveries'];
    }

    function compute_total_revenue($assignments){
        $total = 0;
        foreach($assignments as $assignment){
            $total += $assignment->getDelivery()->getRevenue();
        }
        return $total;
    }

    ### END OF DO NOT MODIFY ###
    
    function find_assignments($deliveries, $riders){
        
        ### Add code here
        ### You are free to create helper functions

        return [];
    }

?>

<!DOCTYPE html>
<html>
    <body>
        <?php

        ### START OF DO NOT MODIFY ###

            if (!isset($_POST["do_not_display"])){  
        ?>
                <form method="post">        
                    <table border='1'>
                        <tr>
                            <th>Select Riders</th>
                        </tr>
                        <tr>
                            <td>
                            <?php
                                $riderDAO = new RiderDAO();
                                $riders = $riderDAO->retrieveAll();

                                foreach ($riders as $rider){
                                    $checked = "";
                                    if (in_array($rider->getUniqueName(),$selected_rider_names)){
                                        $checked = "checked";
                                    }
                                    echo "<input type='checkbox' name='riders[]' value='". $rider->getUniqueName() . "' $checked/>" . $rider->toString() . "<br/>";
                                }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Select Deliveries</th>
                        </tr>
                        <tr>
                            <td>
                            <?php
                                $deliveryDAO = new DeliveryDAO();
                                $deliveries = $deliveryDAO->retrieveAll();

                                foreach ($deliveries as $delivery){
                                    $checked = "";
                                    if (in_array($delivery->getId(),$selected_delivery_ids)){
                                        $checked = "checked";
                                    }
                                    echo "<input type='checkbox' name='deliveries[]' value='". $delivery->getId() . "' $checked/>" . $delivery->toString() . "<br/>";
                                }

                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td align='center'>
                                <input type='submit' name='assign' value='Make Assignments'/>
                            </td>
                        </tr>
                    </table>
                    
                </form>
        <?php
                if (isset($_POST['assign'])){
                    if (count($selected_delivery_ids)>0){
                        $selected_deliveries = [];
                        foreach($deliveries as $delivery){
                            if (in_array($delivery->getId(), $selected_delivery_ids)){
                                $selected_deliveries[] = $delivery;
                            }
                        }
                        
                        $selected_riders = [];
                        foreach($riders as $rider){
                            if (in_array($rider->getUniqueName(), $selected_rider_names)){
                                $selected_riders[] = $rider;
                            }
                        }

                        $assignments = find_assignments ($selected_deliveries, $selected_riders);

                        if ($assignments === null){
                            echo "<br/><strong>VIP deliveries cannot be made</strong>";
                        }
                        else{
                            echo "<br/><strong>Assignments (Total Revenue: " . compute_total_revenue($assignments) . ")</strong><br/>";

                            for ($i=0; $i<count($assignments); $i++){
                                echo ($i+1) . ". " .  $assignments[$i]->toString() . "<br/>";
                            }
                        }
                    }
                    else{
                        echo "<h4>No deliveries are selected</h4>";
                    }
            }
        }

        ### END OF DO NOT MODIFY ###
        ?>
    </body>
</html>