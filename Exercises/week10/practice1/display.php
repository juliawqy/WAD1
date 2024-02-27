<?php
    # Autoload code

    spl_autoload_register(
        function ($class) {
        require_once "model/$class.php";
        }
    );
    # ENTER CODE HERE 

    $bookdao = new BookDAO();
    $allbooks = $bookdao->getBooks();

?>

<!DOCTYPE html>
<html>
    <body>
        <table border="1">
            <tr>
                <th>ISBN</th>
                <th>Title</th>
            </tr>
            <?php
                # Obtain book objects from BookDAO
                # ENTER CODE HERE
                foreach ($allbooks as $book) {
                    echo "<tr> <td> {$book->getISBN()} </td> <td> {$book->getTitle()} </td> </tr>";
                }

            
                
                # Display all book objects in the table
                # ENTER CODE HERE
                
            ?>
        </table>
    </body>
</html>
