<?php
/* 
    Name:  WONG Qian Yu
    Email: qianyu.wong.2022
*/

// $students is an Array of:
//    Associative Arrays, where each Associative Array contains:
//        key (name) => value (string)
//        key (courses) => value (Array of Arrays)
$students = [
    [
        "name"    => 'Jong Un Kim',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['CS102', 'Discrete Mathematics', 'TUE', '0830', 2],
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['LIT380', 'Intro to Korean Literature', 'FRI', '1630', 1]
        ]
    ],
    [
        "name"    => 'Donald Trump',
        "courses" => [
            ['IS112', 'Data Management', 'TUE', '0830', 2],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['IS113', 'Web Application Development', 'THU', '1500', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1000', 1]
        ]
    ],
    [
        "name"    => 'Hugo Chavez',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['IS112', 'Data Management', 'TUE', '0830', 2],            
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1500', 1]
        ]
    ]
];

// INPUT  : $students Array
// OUTPUT : Return an Array of student names (String)
function getStudentNames($students) {
    $arr = [];
    // Part A
    // YOUR CODE GOES HERE

    for ($i=0; $i < count($students); $i++) {
        $arr[] = $students[$i]["name"];
    }

    #or use foreach
    #foreach($students as $student) {
    #    // $student is an Associative Array
    #    $arr[] = $student['name'];
    #}

    return $arr;
}

?>
<html>
<body>
    <form action='q3.php' method='POST'>
        Name:
        <select name='student_name'>
            <?php
                // Part A
                // YOUR CODE GOES HERE
                $student_names = getStudentNames($students); // DO NOT MODIFY THIS LINE
                // YOUR CODE CONTINUES HERE
                foreach ($student_names as $names) {
                    if ($_POST["student_name" == $names]) {
                        echo "<option value=$names[0] selected>$names</option>";
                    }
                    else {
                        echo "<option value=$names[0]>$names</option>";
                    }
                }
            ?>
        </select>
        <input type='submit' value='Show Timetable' />
    </form>

    <table border='1'>
        <tr>
            <td></td>
            <th>08:30am - 10:00am</th>
            <th>10:00am - 11:30am</th>
            <th>12:00nn - 1:30pm</th>
            <th>1:30pm - 3:00pm</th>
            <th>3:00pm - 4:30pm</th>
            <th>4:30pm - 6:00pm</th>
        </tr>
        <tr>
            <td>MON</td>
        </tr>
        <tr>
            <td>TUE</td>
        </tr>
        <tr>
            <td>WED</td>
        </tr>
        <tr>
            <td>THU</td>
        </tr>
        <tr>
            <td>FRI</td>
        </tr>
    </table>

</body>
</html>