<?php

# ============
# INSTRUCTIONS
# ============

    # 1. Import the Person class.
    require_once "model/Person.php";

    # 2. Update the following line to create a new person ("Harry", 35);
    $harry = new Person("Harry", 35);  
    
    # 3. Update the following line to create a new person ("Mary", 27);
    $mary = new Person("Mary", 27);
    
	$another_mary = $mary;
    $harry = $mary; #harry object is gone into the abyss:(
    
    # 4. Print the name of $harry object
    echo $harry->getName()."<br>";
    
    # 5. Print the name of $mary object
    echo $mary->getName()."<br>";
    
    # 6. Set the name of $harry object to "Harry" 
    $harry->setName("Harry");
   
    # 7. Print the name of $harry object
    echo $harry->getName()."<br>";
   
    # 8. Print the name of $mary object
    echo $mary->getName()."<br>";
   
?>
