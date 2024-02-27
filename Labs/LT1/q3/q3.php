<!-- 
    Name: WONG Qian Yu
    Email: qianyu.wong.2022
 -->
<!DOCTYPE html>
<html>
<header>
    <title>Q3</title>
</header>

<body>
    <?php
    // data to test generate_table()
    const MAX_ASSIGNABLE = 3;
    $term = [
        'modules'  => ['m1', 'm2', 'm3'],
        'students' => [
            's1' => ['m1'],
            's2' => ['m1', 'm2'],
            's3' => ['m3']
        ]
    ];
    ?>

    <?php
    // DO NOT MODIFY THE FOLLOWING CODE

    // Helper function to visualise table
    function show_table($table)
    {
        echo "<pre>";
        foreach ($table as $student) {
            foreach ($student as $module) {
                echo "$module ";
            }
            echo "<br>";
        }
        echo "</pre>";
    }

    $table = generate_table($term);

    echo "Applications: <br>";
    show_table($table);

    $result = assign_students($table);
    $num_assigned = $result[0];
    $assignments = $result[1];

    echo "Assignments: <br>";
    show_table($assignments);

    $result = ($num_assigned == MAX_ASSIGNABLE) ? "CORRECT" : "INCORRECT";
    echo "Maximum number of modules assigned TA: $num_assigned ($result)";
    ?>
</body>

</html>

<?php
function generate_table($term)
{
    $table = [];

    // Add code here

    foreach ($term['students'] as $stud => $mod) {
        $table[$stud] = [0,0,0];
        foreach ($mod as $mod_num) {
            for ($i=0;$i<count($mod);$i++) {
                if (strpos($i+1,$mod_num)) {
                    $table[$stud][$i] = 1;
                }
            }
        }
    }

    return $table;
}

function assign_students($term)
{
    $table = generate_table($term);

    $num_assigned = 0;
    $assignments = [];
    $unassigned_modules = [];
    $unassigned_students = [];

    // YOUR CODE GOES HERE



    return [$num_assigned, $assignments, $unassigned_modules, $unassigned_students];
}
