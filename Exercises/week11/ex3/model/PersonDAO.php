<?php

    require_once "ConnectionManager.php";

    class PersonDAO{
        
        public function retrieveAll(){
            $persons = [];

            # Step 1: Connect to database (using the ConnectionManager)
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            
            # Step 2: Prepare a SQL statement
            $sql = "select * from person";
            $stmt = $pdo->prepare($sql);
            
            # Step 3: Run the SQL statement
            $stmt->execute();
            
            # Step 4: Retrieve results row-by-row 
            #         Convert each row to a Person object
            #         Append each Person object to $persons
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $stmt->fetch()) {
                $person = new Person($row["name"], $row["gender"], $row["age"]);
                $persons[] = $person;
            }

            # Step 5: Free up resources
            $stmt = NULL;
            $pdo = NULL;

            return $persons;
        }
        
        public function add($person) {
            $insertOK = false;

            # Step 1: Connect to database (using the ConnectionManager)
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            
            # Get information from $person (i.e., a Person object)
            $name = $person->getName();
            $gender = $person->getGender();
            $age = $person->getAge();

            # Step 2: Prepare a SQL statement
            $sql = "insert into person (name, gender, age) values (:name, :gender, :age)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":gender", $gender, PDO::PARAM_STR);
            $stmt->bindParam(":age", $age, PDO::PARAM_STR);
            
            # Step 3: Run the SQL statement
            $success = $stmt->execute();
            if ($success) {
                $insertOK = "Person added";
            }
            else {
                $insertOK = "Person is not added";
            }

            # Step 5: Free up resources
            $stmt = NULL;
            $pdo = NULL;
            
            return $insertOK;
        }
    }
?>