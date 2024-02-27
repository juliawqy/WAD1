<?php
    # Retrieve name, gender, age information passed from add.html
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $age = $_GET["age"];
   
    # Step 1: Connect to database
    $dsn = "mysql:host=localhost;dbname=week11";
    $pdo = new PDO($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); #need put earlier

    # Step 2: Prepare a SQL statement
    $sql = "insert into person (name, gender, age) values (:name, :gender, :age)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $name, PDO::PARAM_STR);
    $stmt->bindParam(":gender", $gender, PDO::PARAM_STR);
    $stmt->bindParam(":age", $age, PDO::PARAM_STR);

    # Step 3: Run the SQL statement
    $success = $stmt->execute(); #keep into variable to check success status and use as boolean, it will still run

    # Display status "Person added" or "Person is not added"
    #no need to fetch since not printing any data or wtv
    if ($success) {
        echo "Person added";
    }
    else {
        echo "Person is not added";
    }

    # Step 5: Free up resources
    $stmt = NULL;
    $pdo = NULL;

?>