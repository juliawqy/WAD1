<?php

/*
    Name: WONG Qian Yu

    Email: qianyu.wong.2022
*/

require_once 'model/common.php';
#session_start();

?>

<!DOCTYPE html>
<html>
    <body>

		<img src="images/sis.png">

		<h1>Survey: Summary</h1>

        <?php
            
            # Ensure that survey must always be taken from the beginning
            if (!isset($_POST['page2'])) {
                header("Location: survey1.php");
                exit;
            }
            #===

            # == Part B (Display student name and preferences): ENTER CODE HERE ==

            $_SESSION["class_length"] = $_POST["class_length"];
            $_SESSION["sem_length"] = $_POST["sem_length"];
            echo "<table border='1'> 
                    <tr> 
                        <th> Name: </th> 
                        <td> {$_SESSION['name']} </td> 
                    </tr>
                    <tr>
                        <th> Class Length: </th>
                        <td> {$_SESSION['class_length']} </td>
                    </tr>
                    <tr>
                        <th> Semester Length: </th>
                        <td> {$_SESSION['sem_length']} </td>
                    </tr>";

            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==

            $name = $_SESSION['name'];
            $class_length = $_SESSION['class_length'];
            $sem_length = $_SESSION['sem_length'];

            $dao = new ResponseDAO();
            $addResponse = $dao->addResponse($name, $class_length, $sem_length);
            if ($addResponse) {
                echo "<br> <strong>Response saved successfully</strong>";
            }
            else {
                echo "<br> <strong>Response was not saved successfully</strong>";
            }
            
            # ====
  
        ?>

</body>
</html>