<?php
     require_once "autoload.php";
?>
<!DOCTYPE html>
<html>
    <body>
        <table border="1">
            <tr> 
                <th>Title</th> 
                <th>Section</th> 
                <th>Instructor</th> 
            </tr>

            <?php
                # Create a new CourseDAO object
                $coursedao = new CourseDAO();
                
                # Call the retrieveAll method of CourseDAO
                # that will return an indexed array of Course objects
                $courseArr = $coursedao->retrieveAll();
                
                # Print details of each returned Course object in the array
                foreach ($courseArr as $course) {
                    echo "<tr> <td> {$course->getTitle()} </td>
                               <td> {$course->getSection()} </td>
                               <td> {$course->getInstructor()} </td> </tr>";
                }
                
            ?>

        </table>
    </body> 
</html>