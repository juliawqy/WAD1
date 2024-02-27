<?php

require_once 'common.php';

/* 
 * grabs the value send over by the dropdown list
 * the format will be <product's id>-<size> 
 * e.g. '1-M'
 */

$items = $_POST['item'];

$dao = new ProductDAO();


// YOUR CODE GOES HERE
if (!empty($items)) {
    $prodArr = $dao->retrieveAll();
    for ($id=0;$id<count($items);$id++) {
        if ($items[$id] != "default") {
            foreach ($prodArr as $prodObj) {
                if ($prodObj->getID() == $id+1) {
                    $dao->reduceInventory($prodObj->getID(),$items[$id]);
                }
            }
        }
    }
}

header('Location: display.php');
return;

?>
