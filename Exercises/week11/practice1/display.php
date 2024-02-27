<!DOCTYPE html>
<html>
    <body>
        <table border="1">
            <tr>
                <th>ISBN</th>
                <th>Title</th>
            </tr>
            <?php
                # Step 1: Connect to database
                $dsn = "mysql:host=localhost;dbname=week11";
                $pdo = new PDO($dsn, "root", "");

                # Step 2: Prepare a SQL statement
                $sql = "select * from book";
                $stmt = $pdo->prepare($sql);
                
                # Step 3: Run the SQL statement
                $stmt->execute();
                
                # Step 4: Retrieve results row-by-row
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                while ($row = $stmt->fetch()) {
                    echo "<tr> <td>". $row["isbn"]. "</td> <td>".$row["title"]."</td></tr>";
                }
                
                # Step 5: Free up resources
                $stmt = NULL;
                $pdo = NULL;
                
            ?>
        </table>
    </body>
</html>