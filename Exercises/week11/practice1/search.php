<!DOCTYPE html>
<html>
    <body>
        <form>
            ISBN <input type="text" name="isbn"/>
            <input type="submit" value="Find Title"/>
        </form>

        <?php
            if (isset($_GET['isbn'])){ # Form was submitted
                
                $isbn = $_GET['isbn']; # Get ISBN number

                # Step 1: Connect to database
                $dsn = "mysql:host=localhost;dbname=week11";
                $pdo = new PDO($dsn, "root", "");

                # Step 2: Prepare a SQL statement
                $sql = "select * from book where isbn = :isbn";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":isbn", $isbn, PDO::PARAM_STR);
                
                # Step 3: Run the SQL statement
                $stmt->execute();
                
                # Step 4: Retrieve result (if any)
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                if ($row = $stmt->fetch()) {
                    echo "<br> Book found <br> The title is: ".$row["title"];
                }
                else {
                    echo "<br> Book is not available";
                }
                
                # Step 5: Free up resources
                $stmt = NULL;
                $pdo = NULL;

            }
        ?>
    </body>
</html>
