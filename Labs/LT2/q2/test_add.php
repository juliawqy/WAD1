<?php

    require_once "common.php";

    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0 ;
    }

    $insertString = $_SESSION['count'] . $_SESSION['count'] . $_SESSION['count'] . ' for user_account table';

    $_SESSION['count'] = $_SESSION['count'] + 1 ;

    $testAcct = [$insertString, $insertString, $insertString, $insertString]; 

    $userAccount = new UserAccountDAO();   

    echo "Phase 1 - Testing insertion of new record.... $insertString </br>" ;
    
    $insertOK = $userAccount->addUserAccount($testAcct[0], $testAcct[1], $testAcct[2], $testAcct[3]);
    If ($insertOK) {
        echo "Phase 1 Completed - Insertion  of record $insertString is OK! </br></br>";
    } else {
        echo "Phase 1 insertion failed, check your DAO codes !!!! </br></br>";
        exit;
    }

    echo "Phase 2 - Testing insertion of duplicate record.... $insertString </br>" ;
    
    $insertOK2 = $userAccount->addUserAccount($testAcct[0], $testAcct[1], $testAcct[2], $testAcct[3]);

    If (!$insertOK2) {
        echo "Phase 2 Completed - Insertion  of record $insertString is successfully prevented! </br>";
        echo "<h3> Check your database table to ensure your records are OK </br> Optionally, You may want to rerun the SQL script to refresh your database </h3>" ;
        
    } else {
        echo "Phase 2 duplicate record prevention failed, check your DAO codes </br>";
    }

?>