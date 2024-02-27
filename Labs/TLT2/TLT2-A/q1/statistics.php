<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 

            $dao = new ResponseDAO();
            $responseObjArr = $dao->retrieveAll();
            $numResponse = 0;
            $twoH = 0;
            $fifteenW = 0;

            foreach ($responseObjArr as $response) {
                $numResponse++;
                if ($response->getPreferredClassLength() == "2") {
                    $twoH++;
                }
                if ($response->getPreferredSemLength() == "15") {
                    $fifteenW++;
                }
            }

            $fifteenPercent = number_format($fifteenW/$numResponse, 2);

            echo "<table border='1'> 
                    <tr>
                        <th> # Responses </th>
                        <td> $numResponse </td>
                    </tr>
                    <tr>
                        <th> # 2 hours </th>
                        <td> $twoH </td>
                    </tr>
                    <tr>
                        <th> % 15 weeks </th>
                        <td> $fifteenPercent </td>
                    </tr>"
                    
            # ====
		?>
	</body>
</html>