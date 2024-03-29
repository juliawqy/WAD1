<?php
/* 
1.  Do NOT change the existing code.
2.  Do NOT add attributes to this class.
3.  Read TestBasket.php and ADD the missing methods after line 40.
*/
class Basket {

    // ATTRIBUTES
    // name of this basket
    private $name; 

    // associative array where key is item (String) and value is quantity (int)
    private $itemQtyArr; 
    
    // CONSTRUCTOR
    public function __construct($name) {
        $this->name = $name;
        $this->itemQtyArr = [];
    } 

    // METHODS
    public function getSummary() {
        $summary = "Basket '$this->name' [ ";

        if ( count($this->itemQtyArr) == 0 ) {
            $summary .= 'nothing.';
        } else {
            foreach ( $this->itemQtyArr as $item => $qty ) {
                $summary .= "$qty $item, ";
            }

        }
        $summary .= ']';

        return $summary;
    } // end function getSummary

    // ADD MISSING METHODS HERE

    public function get($name) {
        if (!array_key_exists($name, $this->itemQtyArr)) {
            return 0;
        }
        else {
            return  $this->itemQtyArr[$name];
        }
    }

    public function add($name) {
        if (!array_key_exists($name, $this->itemQtyArr)) {
            $this->itemQtyArr[$name] = 0;
        }
        $this->itemQtyArr[$name]++; 
    } 

    public function remove($name) {
        if (!array_key_exists($name, $this->itemQtyArr)) {
            return False;
        }
        if ($this->itemQtyArr[$name] > 0) {
            $this->itemQtyArr[$name]--;
        }
        if ($this->itemQtyArr[$name] == 0) {
            unset($this->itemQtyArr[$name]);
            return True;
        }
        else {
            return False;
        }
    }

} // end class Basket