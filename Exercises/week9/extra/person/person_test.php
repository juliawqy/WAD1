<?php
    # Enter code here

    spl_autoload_register(
        function($class) {
            require_once "$class.php";
        }
    );

    if (!isset($_GET["submit"])) {

        echo "<form action='person_test.php' method='GET'>
                <b> Person 1 </b> <br> <br>
                    First Name: <input type='text' name='firstname1'> <br>
                    Last Name: <input type='text' name='lastname1'> <br>
                    Age: <input type type='text' name='age1'> <br> <br>
                <b> Person 2 </b> <br> <br>
                    First Name: <input type='text' name='firstname2'> <br>
                    Last Name: <input type='text' name='lastname2'> <br>
                    Age: <input type type='text' name='age2'> <br> <br>
                <input type='submit' name='submit'>
            </form>";

    }

    else {

        $firstname1 = $_GET["firstname1"];
        $lastname1 = $_GET["lastname1"];
        $age1 = $_GET["age1"];
        $firstname2 = $_GET["firstname2"];
        $lastname2 = $_GET["lastname2"];
        $age2 = $_GET["age2"];

        $person1 = new Person($firstname1, $lastname1, $age1);
        $person2 = new Person($firstname2, $lastname2, $age2);

        if ($person1->isOlder($person2)) {
            echo "The older person is {$person1->toString()}";
        }
        else {
            echo "The older person is {$person2->toString()}";
        }

    }
    
?>