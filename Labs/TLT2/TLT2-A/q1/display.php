<?php

/*
    Name: WONG Qian Yu

    Email: qianyu.wong.2022
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Stored Responses</h1>
		<table border='1'>
        <?php
            # == Part A (Display Stored Responses): ENTER CODE HERE == 

			$responseDao = new ResponseDao();
			$responseArr = $responseDao->retrieveAll();

			echo "<tr> 
					<th> Name </th>
					<th> Preferred Class Length <br> (in hours) </th>
					<th> Preferred Sem Length <br> (in weeks) </th>
				 </tr>";
				
			foreach ($responseArr as $response) {
				echo "<tr> 
						<td> {$response->getName()} </td>
						<td> {$response->getPreferredClassLength()} </td>
						<td> {$response->getPreferredSemLength()} </td>
					  </tr>";
			}

            # ====
		?>
		</table>
	</body>
</html>