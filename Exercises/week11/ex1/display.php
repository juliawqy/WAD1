<!DOCTYPE html>
<html>
    <body>
        <table border='1'>
            <tr> 
                <th>Name</th> 
                <th>Gender</th> 
                <th>Age</th> 
            </tr>
            <?php   
                # Step 1: Connect to database
                $dsn = "mysql:host=localhost;dbname=week11";
                $pdo = new PDO($dsn, "root", "");
                
                # Step 2: Prepare a SQL statement
                $sql = "select * from person";
                $stmt = $pdo->prepare($sql);

                # Step 3: Run the SQL statement
                $stmt->execute();

                # Step 4: Retrieve results row-by-row and display each row
                #         See lecture slides for the format of the expected output
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                while ($row = $stmt->fetch()) {
                    echo "<tr> <td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td></tr>";
                }

                # Step 5: Free up resources
                $stmt = NULL;
                $pdo = NULL
                
            ?>
        </table>
    </body> 
</html>