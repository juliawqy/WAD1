<?php
/*
    Program to test generate_table() and assign_students() in q3.php.
    Place this file in the same folder as q3.php and run it in the browser
*/
ob_start();
require 'q3.php';
ob_end_clean();

// data to test generate_table() and assign_students()
$term_1 = [
    'modules'  => ['m1', 'm2', 'm3', 'm4', 'm5'],
    'students' => [
        's1' => ['m2', 'm3'],
        's2' => ['m2', 'm3', 'm4'],
        's3' => ['m1', 'm2', 'm5'],
        's4' => ['m3'],
        's5' => ['m3', 'm4', 'm5']
    ]
];
$term_2 = [
    'modules'  => ['m1', 'm2', 'm3', 'm4'],
    'students' => [
        's1' => ['m3'],
        's2' => ['m1', 'm2'],
        's3' => ['m1', 'm4'],
        's4' => ['m2'],
        's5' => ['m4'],
        's6' => ['m1', 'm3']
    ]
];
$term_3 = [
    'modules'  => ['m1', 'm2', 'm3', 'm4', 'm5', 'm6', 'm7'],
    'students' => [
        's1' => ['m1', 'm2', 'm3'],
        's2' => ['m2', 'm4', 'm5'],
        's3' => ['m2', 'm3', 'm6'],
        's4' => ['m5', 'm7']
    ]
];
$term_4 = [
    'modules'  => ['m1', 'm2', 'm3', 'm4', 'm5', 'm6'],
    'students' => [
        's1' => ['m2', 'm3'],
        's2' => [],
        's3' => ['m1', 'm4'],
        's4' => ['m3'],
        's5' => ['m3', 'm4'],
        's6' => ['m6']
    ]
];
$term_5 = [
    'modules'  => ['m1', 'm2', 'm3', 'm4', 'm5', 'm6'],
    'students' => [
        's1' => ['m1', 'm2', 'm3'],
        's2' => ['m1'],
        's3' => ['m2'],
        's4' => ['m5'],
        's5' => ['m4', 'm5'],
        's6' => ['m6']
    ]
];

$table_1 = [
    [0, 1, 1, 0, 0],
    [0, 1, 1, 1, 0],
    [1, 1, 0, 0, 1],
    [0, 0, 1, 0, 0],
    [0, 0, 1, 1, 1]
];
$table_2 = [
    [0, 0, 1, 0],
    [1, 1, 0, 0],
    [1, 0, 0, 1],
    [0, 1, 0, 0],
    [0, 0, 0, 1],
    [1, 0, 1, 0]
];
$table_3 = [
    [1, 1, 1, 0, 0, 0, 0],
    [0, 1, 0, 1, 1, 0, 0],
    [0, 1, 1, 0, 0, 1, 0],
    [0, 0, 0, 0, 1, 0, 1]
];
$table_4 = [
    [0, 1, 1, 0, 0, 0],
    [0, 0, 0, 0, 0, 0],
    [1, 0, 0, 1, 0, 0],
    [0, 0, 1, 0, 0, 0],
    [0, 0, 1, 1, 0, 0],
    [0, 0, 0, 0, 0, 1]
];
$table_5 = [
    [1, 1, 1, 0, 0, 0],
    [1, 0, 0, 0, 0, 0],
    [0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, 1, 0],
    [0, 0, 0, 1, 1, 0],
    [0, 0, 0, 0, 0, 1]
];

$num_assignments_1 = 5;
$num_assignments_2 = 4;
$num_assignments_3 = 4;
$num_assignments_4 = 5;
$num_assignments_5 = 6;

$unassigned_modules_1 = [];
$unassigned_modules_2 = [];
$unassigned_modules_3 = ['m3', 'm6', 'm7'];
$unassigned_modules_4 = ['m5'];
$unassigned_modules_5 = [];

$unassigned_students_1 = [];
$unassigned_students_2 = ['s5', 's6'];
$unassigned_students_3 = [];
$unassigned_students_4 = ['s2'];
$unassigned_students_5 = [];


// evaluate Part A
echo '<br><br>#######################  PART A  #######################<br>';
if (evaluate_part_A($table_1, generate_table($term_1))) {
    echo '<br>Part A - TC1: Pass!';
} else {
    echo '<br>Part A - TC1: Fail!';
}

if (evaluate_part_A($table_2, generate_table($term_2))) {
    echo '<br>Part A - TC2: Pass!';
} else {
    echo '<br>Part A - TC2: Fail!';
}

if (evaluate_part_A($table_3, generate_table($term_3))) {
    echo '<br>Part A - TC3: Pass!';
} else {
    echo '<br>Part A - TC3: Fail!';
}

if (evaluate_part_A($table_4, generate_table($term_4))) {
    echo '<br>Part A - TC4: Pass!';
} else {
    echo '<br>Part A - TC4: Fail!';
}

if (evaluate_part_A($table_5, generate_table($term_5))) {
    echo '<br>Part A - TC5: Pass!';
} else {
    echo '<br>Part A - TC5: Fail!';
}


// evaluate Part B
echo '<br><br>#######################  PART B  #######################<br>';
if (evaluate_part_B([$num_assignments_1, [], $unassigned_modules_1, $unassigned_students_1], assign_students($term_1))) {
    echo '<br>Part B - TC1: Pass!';
} else {
    echo '<br>Part B - TC1: Fail!';
}

if (evaluate_part_B([$num_assignments_2, [], $unassigned_modules_2, $unassigned_students_2], assign_students($term_2))) {
    echo '<br>Part B - TC2: Pass!';
} else {
    echo '<br>Part B - TC2: Fail!';
}

if (evaluate_part_B([$num_assignments_3, [], $unassigned_modules_3, $unassigned_students_3], assign_students($term_3))) {
    echo '<br>Part B - TC3: Pass!';
} else {
    echo '<br>Part B - TC3: Fail!';
}

if (evaluate_part_B([$num_assignments_4, [], $unassigned_modules_4, $unassigned_students_4], assign_students($term_4))) {
    echo '<br>Part B - TC4: Pass!';
} else {
    echo '<br>Part B - TC4: Fail!';
}

if (evaluate_part_B([$num_assignments_5, [], $unassigned_modules_5, $unassigned_students_5], assign_students($term_5))) {
    echo '<br>Part B - TC5: Pass!';
} else {
    echo '<br>Part B - TC5: Fail!';
}


#######################  Evaluation Functions  #######################
function evaluate_part_A($tester, $student)
{
    try {
        for ($i = 0; $i < count($tester); $i++) {
            if (!empty(array_diff($tester[$i], $student[$i]))) {
                return false;
            }
        }
        return true;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), '<br>';
        return false;
    }
}

function evaluate_part_B($tester, $student)
{
    $num_assigned = $student[0];
    $assignments = $student[1];

    try {
        return (
            $tester[0] == $num_assigned) &&
            ($num_assigned == count_assignments($assignments) &&
            consistsOfTheSameValues($tester[2], $student[2]) &&
            consistsOfTheSameValues($tester[3], $student[3])
        );
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), '<br>';
        return false;
    }
}

function count_assignments($assignments)
{
    $num_assignments = 0;
    foreach ($assignments as $assignment) {
        $num_assignments += array_sum($assignment);
    }
    return $num_assignments;
}

function consistsOfTheSameValues(array $a, array $b)
{
    // check size of both arrays
    if (count($a) !== count($b)) {
        return false;
    }

    foreach ($b as $key => $bValue) {

        // check that expected value exists in the array
        if (!in_array($bValue, $a, true)) {
            return false;
        }

        // check that expected value occurs the same amount of times in both arrays
        if (count(array_keys($a, $bValue, true)) !== count(array_keys($b, $bValue, true))) {
            return false;
        }

    }
    return true;
}