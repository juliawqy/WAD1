<?php

require_once "ConnectionManager.php";

class BookDAO {

    # Retrieve all books
    # from a data storage
    #
    # Input:
    #   Nothing 
    #
    # Output: 
    #   An array of Book objects
    #
    #delete private $booklist
    #delete public construct function -> dont want to hard code
    public function getBooks() {

         # Step 1: Connect to the database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        # Step 2: Prepare SQL statement
        $sql = 'SELECT * FROM book';         
        $stmt = $pdo->prepare($sql);

         # Step 3: Execute SQL statement
        $stmt->execute();

        # Step 4: Retrieve matching results (row by row)
        $result = []; # Array to store book objects retrieved from data storage
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            
            # Get isbn number from the matching row
            $isbn = $row['isbn'];

            # Get title from the matching row
            $title = $row['title'];

            # Create a new Book object
            $book = new Book ($isbn, $title);

            # Add newly created book object to $result array
            $result[] = $book;
        }

        # Step 5: Clean up resources
        $stmt = null;
        $pdo = null;

        # Return array of Book objects
        return $result;
    }

    # Retrieve a book with matching isbn number
    # from a data storage
    #
    # Input:
    #   $isbn = isbn number 
    #
    # Output: 
    #   A Book object with matching isbn number
    #   OR
    #   null (if no such book exists in the data storage)
    #   
    public function getBook($isbn) {

        # Step 1: Connect to the database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        # Step 2: Prepare SQL statement
        $sql = 'select * from book where isbn=:isbn';         
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':isbn', $isbn, PDO::PARAM_STR);

        # Step 3: Execute SQL statement
        $stmt->execute();

        # Step 4: Retrieve matching results (row by row)
        $result = null; # Initialize $result with null
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        # "if" (rather than "while") is used here, 
        # as at most there is only one matching row
        # Why? isbn is the primary key of the book table
        if($row = $stmt->fetch()) {
            # Get isbn number from the matching row
            $isbn = $row['isbn'];
            
            # Get title from the matching row
            $title = $row['title'];

            # Create a new Book object
            # and assign it to $result
            $result = new Book($isbn,$title);
        }

        # Step 5: Clean up resources
        $stmt = null;
        $pdo = null;

        # Return either a Book object with matching isbn number OR null
        return $result;
    }

    # Add a Book object
    # to a data storage
    #
    # Input:
    #   $book = a Book object 
    #
    # Output: 
    #   true, if addition operation is successful
    #   false, otherwise        
    #
    public function add($book) {

        # Step 1: Connect to the database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        # Step 2: Prepare SQL statement
        $sql = 'insert into book (isbn, title)
                values (:isbn, :title)';
        $stmt = $pdo->prepare($sql); 
        $isbn = $book->getIsbn();  # get isbn from $book (input Book object)
        $title = $book->getTitle(); # get title from $book (input Book object)
        $stmt->bindParam(':isbn', $isbn, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);

        # Step 3: Execute SQL statement
        $isAddOK = $stmt->execute();

        # Step 5: Clean up resources 
        # (Step 4 is not needed as we are not expecting any matching rows)
        $stmt = null;
        $pdo = null;
        
        # Return boolean flag indicating if the addition operation is successful or not
        return $isAddOK;
     }
}

?>
