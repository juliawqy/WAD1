<?php
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );  
?>

<!DOCTYPE html>
<html>
    <body>
        <form>
            ISBN <input type="text" name="isbn"/>
            <input type="submit" value="Find Title"/>
        </form>

        <?php
            if (isset($_GET['isbn'])){ # Form was submitted
                
                # Get ISBN number
                $isbn = $_GET['isbn']; 

                # Get book with ISBN number
                $bookDAO = new BookDAO(); 
                $book = $bookDAO->getBook($isbn);

                # Display the book (if found)
                # Or display a suitable error message
                if ($book == null){
                    echo "<br/> Book is not available";
                }
                else{
                    echo "<br/> Book found <br/>";
                    echo "The title is: {$book->getTitle()}";
                }
            }
        ?>
    </body>
</html>
