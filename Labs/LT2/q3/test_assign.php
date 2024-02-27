<?php

    ### DO NOT MODIFY THIS FILE ###
    $_POST['do_not_display'] = true;

    require_once "assign.php";
    
    ### Preparation
    
    $riderDAO = new RiderDAO();
    $deliveryDAO = new DeliveryDAO();
                
    ### Test case 1
    
    echo "<h3>TC1:</h3>";

    $rider_unique_names = ["Captain Marvel"];
    $riders = $riderDAO->retrieveWithNames($rider_unique_names);
    $delivery_ids = ["D1","D2","D3"];
    $deliveries = $deliveryDAO->retrieveWithIDs($delivery_ids);

    $assignments = find_assignments ($deliveries, $riders);
    $max_revenue = 160;

    if (validate($assignments, $riders, $deliveries, $max_revenue)){
        echo "<strong>Status: Pass</strong><br/><br/>";
    }
    else{
        echo "<strong>Status: Fail</strong><br/><br/>";
    }

    
    ### Test case 2
    
    echo "<h3>TC2:</h3>";

    $rider_unique_names = ["Superman"];
    $riders = $riderDAO->retrieveWithNames($rider_unique_names);
    $delivery_ids = ["D4","D5"];
    $deliveries = $deliveryDAO->retrieveWithIDs($delivery_ids);

    $assignments = find_assignments ($deliveries, $riders);

    if ($assignments === null){
        echo "<strong>Status: Pass</strong><br/><br/>";
    }
    else{
        echo "<strong>Status: Fail</strong><br/><br/>";
    }

    ### Test case 3
    
    echo "<h3>TC3:</h3>";

    $rider_unique_names = ["Captain Marvel", "Superman", "Wonder Woman"];
    $riders = $riderDAO->retrieveWithNames($rider_unique_names);
    $delivery_ids = ["D1","D2","D3","D4","D5","D6","D7","D8"];
    $deliveries = $deliveryDAO->retrieveWithIDs($delivery_ids);

    $assignments = find_assignments ($deliveries, $riders);
    $max_revenue = 250;

    if (validate($assignments, $riders, $deliveries, $max_revenue)){
        echo "<strong>Status: Pass</strong><br/><br/>";
    }
    else{
        echo "<strong>Status: Fail</strong><br/><br/>";
    }

    ### Validation

    function validate($assignments, $riders, $deliveries, $max_revenue){
        
        $total = compute_total_revenue($assignments);
        if ($total != $max_revenue) return false;

        foreach($assignments as $assignment){
            if (invalid_rider($assignment, $riders)) return false;
            if (invalid_delivery($assignment, $deliveries)) return false;
        }

        return true;
    }

    function invalid_rider($assignment, $riders){
        $assigned_rider_desc = $assignment->getRider()->toString();

        foreach($riders as $rider){
            $one_desc = $rider->toString();
            if ($one_desc == $assigned_rider_desc) return false;
        }
        
        return true;
    }

    function invalid_delivery($assignment, $deliveries){
        $assigned_delivery_desc = $assignment->getDelivery()->toString();

        foreach($deliveries as $delivery){
            $one_desc = $delivery->toString();
            if ($one_desc == $assigned_delivery_desc) return false;
        }
        
        return true;
    }


?>