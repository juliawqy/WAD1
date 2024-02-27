<?php
	// In real-life, the following will be retrieved from a database.
	// Mapping of countries to their capital city.
	$capitals = array(
		"Singapore" => "Singapore", 
		"Malaysia" => "Kuala Lumpur", 
		"Philippines" => "Manila", 
		"Indonesia" => "Jakarta", 
		"Thailand" => "Bangkok", 
		"Brunei" => "Bandar Seri Begawan", 
		"Cambodia" => "Phnom Penh", 
		"Laos" => "Vientiane",
		"Myanmar" => "Naypyidaw",	
		"Vietnam" => "Hanoi"
	);
			
?>
<html>
<body>

	<?php

	/*
		INSTRUCTIONS
		============
		1.  For each country-form value submitted, 
			a.  Find the capital city of the country using $capitals.
			b.  Print out the country and its capital as rows in a table.
		2.  If there is no country selected (i.e. user did not check any checkbox), print "No country selected."
	*/

	if (isset($_GET["countries"])) {
		$check_countries = $_GET["countries"];
		echo "<table border='1'> <tr> <th> Country </th> <th> Capital </th>";
		foreach ($check_countries as $country) {
			echo "<tr> <td> $country </td>
			<td> $capitals[$country] </td>";
		}
		echo "</table>";
	}
	else {
		echo "No country selected.";
	}

	?>
	
</body>
</html>