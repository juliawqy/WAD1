<?php
// functions
/**
 * @param int $month_num  The required month.  An integer between 1 to 12 inclusive.
 * @return string 3-characters name of the month.  
 * $month_num 1 is 'JAN', and so on.
 */
function getMonthName($month_num) {
   $names = [ 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

   // YOUR CODE GOES HERE
   // Make use of $names to get the name of the required month.

   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */

   $return_mon = $names[$month_num-1];

   return $return_mon;
}

/**
 * @param string $luck_str 
 *    String depicting the monthly luck.  
 * 
 *    This string has the following format:
 *       '<luck>[optional:x<number of months>], ..., <luck>'
 *    <luck> can be GOOD, NORMAL or BAD
 *    If followed by x<number of months>, this <luck> will persist for the the specified number of months.
 *    Otherwise, this <luck> is for one month.
 *    The string always end with <luck> which means means this is the luck until end of year.
 *    
 *    E.g. 'GOODx2,BAD,GOODx3,NORMAL' means 
 *       GOOD for 2 months (Jan, Feb), BAD for 1 month (Mar), GOOD for 3 months (Apr, May, Jun) and NORMAL till end of year (Jul to Dec).
 */
function luckStringToDict( $luck_str) {
   // YOUR CODE GOES HERE

   $return_array = ['GOOD' => [], 'BAD' => [], 'NORMAL' => []];
   $month_count = 0;
   $str_pieces = explode(",",$luck_str);
   foreach ($str_pieces as $piece) {
      if (ctype_digit($piece[strlen($piece)-1])) {
         for ($j=0;$j<$piece[strlen($piece)-1];$j++) {
            $month_count++;
            foreach ($return_array as $key => $value) {
               if (is_int(strpos($piece,$key))) {
                  $return_array[$key][] = getMonthName($month_count);
               }
            }
         }
      }
      else {
         $month_count++;
         foreach ($return_array as $key => $value) {
            if ($piece == $key) {
               $return_array[$key][] = getMonthName($month_count);
            }
         }
      }
   }

   for ($k=$month_count; $k<13; $k++) {
      foreach ($return_array as $key => $value) {
         if (strpos($piece,$key) != 0) {
            $return_array[$key][] = getMonthName($month_count);
            $month_count++;
         }
      }
   }
   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   return $return_array;
}


?>