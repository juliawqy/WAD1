<?php
    # Autoload code
    # ENTER CODE HERE 

    spl_autoload_register(
        function ($class) {
        require_once "model/$class.php";
        }
    );

?>

<!DOCTYPE html>
<html>
    <body>
        <form>
            ISBN <input type="text" name="isbn"/>
            <input type="submit" name="submit" value="Find Title"/>
        </form>

        <?php
            # ENTER CODE HERE
            # Check if form is submitted

            if (isset($_GET["submit"])) {
                
                # Get ISBN number
                $isbn = $_GET["isbn"];

                # Get book with ISBN number
                $bookdao = new BookDAO();
                $bookisbn = $bookdao->getBook($isbn);
            
                # Display the book (if found)
            
                if ($bookisbn != null) {
                    echo "<br> Book is found <br> Book title is: " .$bookisbn->getTitle();
                }
                else {
                # Or display a suitable error message
                    echo "<br> Book not found";
                }

            }
        ?>
    </body>
</html>
