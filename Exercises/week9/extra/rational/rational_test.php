<?php
    # Enter code here

    spl_autoload_register(
        function($class) {
            require_once "$class.php";
        }
    );

    if (isset($_GET['submit'])) {

        $num1 = $_GET['num1'];
        $den1 = $_GET['den1'];
        $num2 = $_GET['num2'];
        $den2 = $_GET['den2'];
        $op = $_GET['op'];

        $rat1 = new Rational($num1, $den1);
        $rat2 = new Rational($num2, $den2);

        if ($op=="add") {
            $result = $rat1->add($rat2);
        }
        elseif ($op=="sub") {
            $result = $rat1->sub($rat2);
        }
        elseif ($op=="mul") {
            $result = $rat1->mul($rat2);
        }
        else {
            $result = $rat1->div($rat2);
        }

        echo "First Number: {$rat1->getString()} <br>
              Second Number: {$rat2->getString()} <br>
              Results: $result";

    }
    
    else {
        echo "<form action='rational_test.php'> 
                <b> Rational 1 </b> <br> <br>
                Numerator: <input type='text' name='num1'> <br>
                Denominator: <input type='text' name='den1'> <br> <br>
                
                <b> Rational 2 </b> <br> <br>
                Numerator: <input type='text' name='num2'> <br>
                Denominator: <input type='text' name='den2'> <br> <br>
                
                Operation: <select name='op'>
                            <option value='add' selected> + </option>
                            <option value='sub'> - </option>
                            <option value='mul'> * </option>
                            <option value='div'> / </option>
                        </select> <br> <br>
                
                <input type='submit' name='submit' value='Submit'>";
    }

?>