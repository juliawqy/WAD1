<?php
    class ShopDAO{

        # Default constructor is created by default if no constructor is specified
        # Retrieve data from the database table - shop
    
        public function retrieveAll(){

            // retrieve all data from the database to create an array index of Shop objects
            // SQL statement : "Select * from shop"

            $result = [];
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $sql = "Select * from shop";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            while($row = $stmt->fetch()){
                $result[] = new Shop($row["shopname"],$row["location"]);
            }
            $stmt = null;
            $pdo = null;
         
            return $result;
        }

        public function retrieveAllStoreName(){

            // retrieve all data from the database to return an array of shop name
            // SQL statement : "Select distinct shopname from shop"
            
            $result = [];
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $sql = "Select distinct shopname from shop";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            while($row = $stmt->fetch()){
                $result[] = $row["shopname"];
            }
            $stmt = null;
            $pdo = null;

            return $result;
        }

        public function retrieveAllLocation(){

            // retrieve all data from the database to return an array of location
            // SQL statement : "Select distinct location from shop"
            
            $result = [];
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $sql = "Select distinct location from shop";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            while($row = $stmt->fetch()){
                $result[] = $row["location"];
            }
            $stmt = null;
            $pdo = null;

            return $result;
        }

        public function retrieveLocationStorename($location1, $shopname1){

            // this function serve to check if the shop name exisit in the location. 
            // Possible SQL statement : SELECT * from shop where location = :location AND shopname = :shopname";
            $result = False;
            $checkArr = [];
            $connMgr = new ConnectionManager();
            $pdo = $connMgr->getConnection();
            $sql = "Select * from shop where location = :location AND shopname = :shopname";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam(":location",$location1,PDO::PARAM_STR);
            $stmt->bindParam(":shopname",$shopname1,PDO::PARAM_STR);
            $stmt->execute();
            while($row = $stmt->fetch()){
                $checkArr[$row["shopname"]] = $row["location"];
            }
            $stmt = null;
            $pdo = null;

            if (array_key_exists($shopname1,$checkArr)) {
                $result = True;
            }
           
            return $result;
        }

        
    }
?>