<?php
class Book{
    private $isbn;
    private $title;
    
    # Constructor
    public function __construct($isbn,$title){
        $this->isbn = $isbn;
        $this->title = $title;
    }

    # Getter method to obtain isbn number from a Book object
    public function getIsbn(){
        return $this->isbn;
    }

    # Getter method to obtain title from a Book object
    public function getTitle(){
        return $this->title;
    }
}
?>
