<?php
    require_once "autoload.php";
?>
<!DOCTYPE html>
<html>
    <body>
        <table border="1">
            <tr> 
                <th>Name</th> 
                <th>Gender</th> 
                <th>Age</th> 
            </tr>
            <?php
                # Create a new PersonDAO object
                $persondao = new PersonDAO();
                
                # Call the retrieveAll method of PersonDAO
                # that will return an indexed array of Person objects
                $personArr = $persondao->retrieveAll();
                
                # Print details of each returned Person object in the array
                foreach ($personArr as $person) {
                    echo "<tr><td> {$person->getName()} </td>
                              <td> {$person->getGender()} </td>
                              <td> {$person->getAge()} </td> </tr>";
                }
            
            ?>
        </table>
    </body> 
</html>