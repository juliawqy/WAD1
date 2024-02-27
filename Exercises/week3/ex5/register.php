<?php
  // Add form processing code
  // Check the expected behaviors given on the slides

  $name = $_POST["first"]." ".$_POST["last"];
  if ($_POST["gender"] == "F"){
    $gender = "Ms.";
  }  
  else {
    $gender = "Mr.";
  }
  
  echo "Welcome $gender $name!";
  echo "<br/> You have been successfully registered !";
?>