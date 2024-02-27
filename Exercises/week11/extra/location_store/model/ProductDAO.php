<?php
    class ProductDAO{

        // The DAO retrieve data from Product table in the database.
        
        public function retrieveAll(){

            // retrieve all data from the database to create an array index of Product objects
            // SQL statement : "Select * from product"
            $result = [];
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $sql = "Select * from product";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Product($row["shopname"],$row["item"],$row["category"],$row["price"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        public function retrieveByShopName($shopname){
        
            // retrieve the data from the database to create an array index of Product objects that comes from the shop name 
            // SQL statement : "Select * from product where shopname = :shopname";
            $result = [];
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $sql = "Select * from product where shopname = :shopname";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam(":shopname",$shopname,PDO::PARAM_STR);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Product($row["shopname"],$row["item"],$row["category"],$row["price"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

      
    }
?>