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
        <table border="1">
            <tr>
                <th>ISBN</th>
                <th>Title</th>
            </tr>
            <?php
                # Obtain books from BookDAO
                # Display all books in the table

                $bookDAO = new BookDAO();
                $books = $bookDAO->getBooks();
                foreach ($books as $book){
                    echo "
                        <tr>
                            <td>{$book->getIsbn()}</td>
                            <td>{$book->getTitle()}</td>
                        </tr>
                    ";
                }
            ?>
        </table>
    </body>
</html>
