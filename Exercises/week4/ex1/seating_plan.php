<?php
	// In real-life, the following will be retrieved from a database
	$seating_plan = 
		array(
			array( "amy", "alex", "alfred" ),
			array( "betty" ),
			array( "cat", "cindy", "catherine", "connie", "celest" ), 
			array( "dan", "derrick", "donnie", "dickson", "duke", "donald" ),
			array( "ellen", "eleen" ),
			array( "faye", "fred", "flint" ),
			array( "george" )
		);

?>
<!DOCTYPE html>
<html>
<body>
	
	<h4>
		Seating plan without the first and last rows, <br/>
		and without the first and last seats
	</h4>
	<?php
		
		// INSTRUCTIONS
		// ============
		// 1.  For each row in 2D-array $seating_plan EXCLUDING the first and last row, 
			// 	a.  Print row number (starting from 2) followed by a colon 
			// 		and all the names in row separated by a space EXCLUDING the first and last names.
			// 	b.	Print each row on a separate line.
		
		// Expected output:
		// --- output: start ---
		// Row 2: 
		// Row 3: cindy catherine connie 
		// Row 4: derrick donnie dickson duke 
		// Row 5: 
		// Row 6: fred 
		// --- output: end ---
		
		for ($rownum = 1; $rownum < count($seating_plan)-1; $rownum++) {
			echo "Row " . ($rownum+1) . ": ";
			$row = $seating_plan[$rownum];
			for ($colnum = 1; $colnum < count($row)-1; $colnum++) {
				$name = $row[$colnum];
				echo $row[$colnum]  . "&nbsp";
			}
			echo "<br>";
		}

		echo " <br>for only odd/even row <br>";
		for ($rownum = 1; $rownum < count($seating_plan)-1; $rownum+=2) {
			echo "Row " . ($rownum+1) . ": ";
			$row = $seating_plan[$rownum];
			for ($colnum = 1; $colnum < count($row)-1; $colnum++) {
				$name = $row[$colnum];
				echo $row[$colnum]  . "&nbsp";
			}
			echo "<br>";
		}


	?>
	
</body>
</html>