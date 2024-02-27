<?php
/* 
    Name:  
    Email: 
*/

function generateRandomSets($quantity) {
    $num_numbers = 3; // generate 3 random integers
    $result = [];

    for ($i=0; $i<$quantity; $i++ ) {
        $holding = [];
        for ($j=0; $j<$num_numbers; $j++) {
            $holding[] = rand(0,9);
        }
        $result[] = $holding;
    }

    /*
     $result is an Array of Arrays.
     A sample $result array looks like this
     with parameter $quantity of 3 (user input):

     [
         [1, 5, 3],
         [2, 0, 9],
         [4, 8, 4]
     ]
    */
    
    // Part A
    // YOUR CODE GOES HERE
    
    return $result;
}

function calculate($random_sets, $lucky_number) {
    $result = [];
    $num_numbers = 3; // each set consists of 3 randomly generated integers

    foreach ($random_sets as $sets) {
        $matches = 0;
        foreach ($sets as $num) {
            if ($num == $lucky_number) {
                $matches++;
            }
        }
        $result[] = $matches;
    }

    /*
     $results is an Array.
     A sample $result array looks like this
     (given that $random_sets contain 4 sets of numbers)

     [
         0,
         1,
         0,
         2
     ]

     It means:
        - First number set had zero match.
        - Second number set had ONE match.
        - Third number set had zero match.
        - Fourth number set had TWO matches.

    */

    // Part B
    // YOUR CODE GOES HERE
    
    return $result;
}

// Form Processing
// YOUR CODE GOES HERE

    $quantity = $_POST['quantity'];
    $lucky_number = $_POST['lucky_number'];
    $bet_amount = $_POST['bet_amount'];

    echo "<h1> Lucky Number: $lucky_number </h1>
    <h1> Bet Amount: $bet_amount </h1>";


// Generate # of sets (each set contains 3 numbers)
$random_sets = generateRandomSets($quantity); // DO NOT MODIFY THIS LINE

// Check if lucky number is found
$result = calculate($random_sets, $lucky_number); // DO NOT MODIFY THIS LINE

$total_winnings = 0;

echo "<table border='1'> 
<tr> <th>Number Set</th> <th>Number of Matches</th> <th>Winning Amount</th> </tr>";
for ($k=0; $k<count($result); $k++) {
    #for ($n=0; $n<3; $n++) {
    #    echo "{$random_sets[$k][$n]}";
    #    if ($n<2) {
    #        echo ",";
    #    }
    #}

    #qns give hint use implode

    $line = implode(",", $random_sets[$k]);
    echo "<tr> <td> $line </td> <td> $result[$k] </td>";
    $winnings = $result[$k]*$bet_amount;
    $total_winnings += $winnings;
    echo "<td> $winnings </td> </tr>";
}
echo "<tr> <td colspan='2'> <b> <p style='text-align:right;'> Total Winning Amount </p> </b> </td> 
<td> <b> $total_winnings </b> </td> </tr>";
echo "</table>";

?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>
