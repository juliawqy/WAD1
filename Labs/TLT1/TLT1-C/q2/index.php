<?php

// Do NOT edit: start
$horoscopeDict = [
   'ARIES' => 'NORMALx2, GOODx2, BADx2, NORMALx3, BAD',
   'TAURUS' => 'GOODx3, NORMALx3, BADx3, NORMAL',
   'GEMINI' => 'NORMALx4, GOOD, BAD, NORMAL, NORMALx2, GOOD',
   'CANCER' => 'BADx2, NORMAL, GOOD, BAD, NORMALx3, BADx2, GOOD',
   'LEO' => 'NORMALx4, GOOD, NORMALx3, GOOD',
   'VIRGO' => 'GOOD, BADx3, NORMAL, BAD, GOOD, BADx4, NORMAL',
   'LIBRA' => 'NORMALx2, GOOD',
   'SCORPIO' => 'NORMALx5, BADx4, NORMAL',
   'SAGITTARIUS' => 'GOODx3, BADx2, NORMAL, GOOD, NORMAL, BAD',
   'CAPRICON' => 'BAD, GOOD, NORMAL',
   'AQUARIUS' => 'NORMAL',
   'PISCES' => 'GOODx6, NORMAL',
];

// The following line "import" the functions declared in the file functions.php
require_once 'functions.php';

// Do NOT edit: end

// process form
// YOUR CODE GOES HERE

   $value = '';
   if (isset($_GET['horoscope'])) {
      $horoscope = $_GET['horoscope'];
      $horoscope = trim($horoscope);
      $horoscope = strtoupper($horoscope);
      $value = $horoscope;
   }
   
   echo "<form action='index.php' method=get>
         Horoscope <input type='text' name='horoscope' value=\"$value\">
         <input type='submit' name='submit'> </form>";

   if (isset($_GET['submit'])) {
      if (isset($_GET['horoscope'])) {
         $horoscope = $_GET['horoscope'];
         $horoscope = trim($horoscope);
         $horoscope = strtoupper($horoscope);
         $value = $horoscope; 
         if (array_key_exists($horoscope,$horoscopeDict)) {
            $value = $horoscope;
            $luck_arr = luckStringToDict($horoscopeDict[$horoscope]);
            foreach ($luck_arr as $luck => $month_arr) {
               echo "<b> $luck: </b>";
               if (!empty($month_arr)) {
                  $month_str = implode(", ", $month_arr);
                  echo "$month_str <br>";
               }
               else {
                  echo "NIL <br>";
               }
            }
         }

         else {
            echo "<ul> <li> Unknown horoscope </li> </ul>";
         }
      }
   }
