<?php
// Do NOT change: start
$gender_list = [
   'm' => 'Male',
   'f' => 'Female',
];

$pet_list = [ "Cat", "Dog", "Fish", "Other"];

$fruit_list = [ 'Apple', 'Orange', 'Pear'];
// Do NOT change: end
   
   echo "<form method='post' action='one.php'> <table border='1'>
         <tr> 
            <th> Gender </th>";
            foreach ($gender_list as $gender => $word) {
               echo "<td> <input type='radio' 
                           name='gender' 
                           value=\"$gender\" 
                           id=\"$gender\"";
                           if (isset($_POST['gender']) && $_POST['gender'] == $gender) {
                              echo "checked";
                           }                   
                           echo "> <label for=\"$gender\"> $word </label> </td>";
            }
            echo "<th rowspan='2'> Pets </th> <td rowspan='2'> <select name='pet[]' multiple>";
            foreach ($pet_list as $pet) {
               echo "<option value=\"$pet\"> $pet </option>";
            }
            echo "</select> </td>";
   echo "</tr>
         <tr>
            <th> Fruits </th> <td colspan='2'>";
            foreach ($fruit_list as $fruit) {
               echo "<input type='checkbox' 
                     name='fruits[]' 
                     value=\"$fruit\"
                     id=\"$fruit\">
                     <label for=\"fruit\"> $fruit </label>";
            }
            echo "</td>   
      </table>";
   echo "<input type='submit' name='submit' value='Send'> </form> <br>";
   echo "<a href='http://localhost/is113/TLT1/TLT1-C/q1/one.php' name='reset'> Reset form </a>";

   if (isset($_POST['submit'])) {
      if (!isset($_POST['gender'])) {
         echo "<h1> Errors </h1> <ul> <li> No gender </li> </ul>";
      }
      else {
         if ($_POST['gender'] == 'm') {
            echo "<h1> Dear Sir </h1>";
         }
         else {
            echo "<h1> Dear Miss </h1>";
         }
         echo "<h2> Pets </h2>";
         if (!isset($_POST['pet'])) {
            echo "No pets";
         }
         else {
            echo "<ol>";
            foreach ($_POST['pet'] as $pet) {
               echo "<li> $pet </li>";
            }
            echo "</ol>";
         }
         echo "<h2> Fruits </h2>";
         if (!isset($_POST['fruits'])) {
            echo "<img src='fruits/none.jpg'> ";
         }
         else {
            foreach ($_POST['fruits'] as $fruit) {
               echo "<img src='fruits/$fruit.jpg'> ";
            }
         }
      }
   }

?>

<html>
<head>
   <style>
      td {
         padding: 5px;
      }
   </style>
</head>
<body>
   
               
</body>
</html>