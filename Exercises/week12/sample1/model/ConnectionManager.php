<?php
class ConnectionManager {
    public function getConnection() {        
        $dsn  = "mysql:host=localhost;dbname=week12";
        return new PDO($dsn, "root", "");  
    }
}
?>