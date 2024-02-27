<?php

// Make new Car objects

require_once "Car.php";

$car1 = new Car(2008, "Honda", "Fit", 7);
$car2 = new Car(2016, "Hyundai", "Sonata", 6);
$car3 = new Car(2000, "Toyota", "Cororlla", 6);

$cars = [$car1, $car2, $car3];

/*

// We USED TO use Associative Array...
// to represent and store "things" (e.g. objects).
$cars = [
            [   "year"   => 2008,
                "make"   => 'Honda',
                "model"  => 'Fit',
                "rating" => 7 ],

            [   "year"   => 2016,
                "make"   => 'Hyundai',
                "model"  => 'Sonata',
                "rating" => 6 ],

            [   "year"   => 2000,
                "make"   => 'Toyota',
                "model"  => 'Corolla',
                "rating" => 6 ]
];
*/

?>