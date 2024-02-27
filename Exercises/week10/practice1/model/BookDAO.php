<?php

  class BookDAO {
    private $bookList;

    public function __construct() {
      $this->bookList = array(
        new Book("isbn1", "I love SCIS"),
        new Book("isbn2", "SCIS loves me"),
        new Book("isbn3", "History of SMU")
      );
    }
   
    # Get all books
    public function getBooks() {
      return $this->bookList;
    }

    # Get a book with a particular isbn number
    public function getBook($isbn){
      foreach($this->bookList as $book){
          if ($book->getIsbn() == $isbn){
              return $book;
          }
      } 
      return null; 
    }
    
  }

?>
