<?php

    Class ConnectionManager{

        public function getConnection() {
            $dsn = "mysql:host=localhost;dbname=week11"; 
            #if change dbname or pw only need change from here instead of in each dao
            $pdo = new PDO($dsn, "root", "");
            return $pdo;
        }

    }