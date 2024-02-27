<?php
    require_once "autoload.php";

    # Retrieve name, gender, and age information passed from add.html
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $age = $_GET["age"];
    
    # Create a new Person object with the name, gender, and age information
    $person = new Person($name,$gender,$age);

    # Create a new PersonDAO object
    $persondao = new PersonDAO();

    # Call add method of PersonDAO with the new Person object as an argument
    $return_stat = $persondao->add($person);

    # Display "Person Added" or "Person is not added" 
    # Depending on the return value of the add method
    echo "$return_stat";

?>